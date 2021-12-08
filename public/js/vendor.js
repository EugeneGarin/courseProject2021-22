(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/vendor"],{

/***/ "./node_modules/alpine/alpine.js":
/*!***************************************!*\
  !*** ./node_modules/alpine/alpine.js ***!
  \***************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

/**
 *
 * Alpine, the Apache Log Parser
 *
 * Created by blarsen on 02.10.14.
 */


var Buffer = __webpack_require__(/*! ./buffer */ "./node_modules/alpine/buffer.js");

var byline = __webpack_require__(/*! byline */ "./node_modules/byline/lib/byline.js");
var _ = __webpack_require__(/*! underscore.string */ "./node_modules/underscore.string/lib/underscore.string.js");
var through2 = __webpack_require__(/*! through2 */ "./node_modules/through2/through2.js");

var Alpine = function (logformat) {

    this.setLogFormat = setLogFormat;
    this.getLogFormat = getLogFormat;
    this.parseLine = parseLine;
    this.getObjectStream = getObjectStream;
    this.getStringStream = getStringStream;
    this.parseReadStream = parseReadStream;

    if (logformat)
        this.setLogFormat(logformat);
    else
        this.setLogFormat(Alpine.LOGFORMATS.COMBINED);

};

function getObjectStream() {
    var thisAlpine = this;
    return through2.obj(function(chunk, enc, callback) {
        var data = thisAlpine.parseLine(chunk);
        this.push(data);
        callback();
    });
}

function getStringStream() {
    var thisAlpine = this;
    return through2.obj(function(chunk, enc, callback) {
        var data = thisAlpine.parseLine(chunk);
        this.push(JSON.stringify(data));
        callback();
    });
}

function parseReadStream(stream, callback) {
    var thisAlpine = this;
    var stream = byline.createStream(stream);
    stream.pipe(through2.obj(function(chunk, enc, t2callback) {
        var data = thisAlpine.parseLine(chunk.toString());
        callback(data);
        t2callback();
    }))
}

function getLogFormat() {
    return this.logformat;
}

function setLogFormat(logformat) {
    this.logformat = logformat;
    this.formatfields = parseLogFormat(logformat);
}

function parseLine(line) {
    var result = {
        originalLine: line
    };

    var buf = new Buffer(line, 0);

    this.formatfields.forEach(function(field) {
        buf.skipSpaces();
        var val;
        if (field.isQuoted) {
            if (!(buf.lookingAt() === '"'))
                throw new Error("Field defined as quoted was not quoted");
            buf.skip();
            val = buf.getUpto('"');
            buf.skip();
        } else if (field.isDate) {
            if (!(buf.lookingAt() === '['))
                throw new Error("Time field is not enclosed in brackets");
            buf.skip();
            val = buf.getUpto(']');
            buf.skip();
        } else {
            val = buf.getUpto(' ');
        }
        result[field.name] = val;
    })

    return result;
}

function parseLogFormat(logformat) {
    var fields = [];
    var buf = new Buffer(logformat, 0);
    while (buf.hasMore()) {
        buf.skipSpaces();
        var field = buf.getUpto(" ");
        var isQuoted = field[0] === '"';
        var field = stripQuotes(field);

        // Check that this is a field definition (starting with %) and remove the prefix
        if (!(field[0] === "%"))
            throw new Error("Field does not start with %: "+field);
        field = field.substring(1);

        // Remove modifiers
        if (field.indexOf("{") > 0) {
            field = field.replace(/^[0-9!]+//g, "");
        }
        field = field.replace(/[<>]/g, "");

        var fieldName = FIELDS[field];

        // Handle parameterized fields
        if (field.indexOf('{') >= 0) {
            var matches = (/{(.*)}(.*)/).exec(field);
            var value = matches[1];
            var field = matches[2];
            if (!PARAMFIELDS[field])
                throw new Error("The field "+field+" should not be parameterized");
            fieldName = PARAMFIELDS[field] + ' ' + value;
        }

        if (!FIELDS[field])
            throw new Error("Unknown log format field "+field);
        fields.push({
            field: field,
            name: fieldName,
            isQuoted: isQuoted,
            isDate: field === 't'
        });
    }
    return fields;
}

function stripQuotes(text) {
    if ((_.startsWith(text, '"') && _.endsWith(text, '"'))
    || (_.startsWith(text, '[')) && _.endsWith(text, ']'))
        return text.substr(1, text.length-2);
    return text;
}

Alpine.LOGFORMATS = {
    COMBINED: "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-agent}i\"",
    CLF: "%h %l %u %t \"%r\" %>s %b",
    CLF_VHOST: "%v %h %l %u %t \"%r\" %>s %b"
}

var FIELDS = {
    'a': 'remoteIP',
    'A': 'localIP',
    'B': 'size',
    'b': 'sizeCLF',
    'D': 'serveTime',
    'f': 'filename',
    'h': 'remoteHost',
    'H': 'requestProtocol',
    'k': 'keepaliveRequests',
    'l': 'logname',
    'm': 'requestMethod',
    'p': 'port',
    'P': 'pid',
    'q': 'queryString',
    'r': 'request',
    'R': 'responseHandler',
    's': 'status',
    't': 'time',
    'T': 'serveTime',
    'u': 'remoteUser',
    'U': 'urlPath',
    'v': 'canonicalServerName',
    'V': 'serverName',
    'X': 'connectionStatus',
    'I': 'bytesReceived',
    'O': 'bytesSent',
    'C': 'cookie',
    'e': 'environment',
    'i': 'requestHeader',
    'n': 'note',
    'o': 'responseHeader',
    'p': 'formatPort',
    'P': 'pidFormat',
    '^ti': 'requestTrailerLine',
    '^to': 'responseTrailerLine'
}

PARAMFIELDS = {
    "c": "Cookie",
    "e": "Environment",
    "i": "RequestHeader",
    "n": "Note",
    "o": "ResponseHeader",
    "p": "Port",
    "P": "PID",
    "t": "Time",
    '^ti': 'RequestTrailerLine',
    '^to': 'ResponseTrailerLine'
}

module.exports = Alpine;


/***/ }),

/***/ "./node_modules/alpine/buffer.js":
/*!***************************************!*\
  !*** ./node_modules/alpine/buffer.js ***!
  \***************************************/
/***/ ((module) => {

/**
 * Created by blarsen on 03.10.14.
 */


var Buffer = function(data, index) {
    this.data = data;
    this.index = index;

    this.skipSpaces = function() {
        while (this.hasMore() && this.data[this.index] == ' ')
            this.index++;
    }

    this.getOne = function() {
        return this.data[this.index++];
    }

    this.getUpto = function(char) {
        if (!this.hasMore())
            return undefined;
        var result = '';
        while (this.hasMore() && (this.data[this.index] != char || this.data[this.index-1] == '\\')) {
            result += this.data[this.index++];
        }
        return result;
    }

    this.skip = function(count) {
        count = count || 1;
        var before = this.index;
        this.index = Math.min(this.index+count, this.data.length);
    }

    this.rewind = function() {
        this.index = 0;
    }

    this.lookingAt = function() {
        if (!this.hasMore())
            return undefined;
        return this.data[this.index];
    }

    this.hasMore = function() {
        return this.remaining() > 0;
    }

    this.remaining = function() {
        return this.data.length - this.index;
    }

}

module.exports = Buffer;


/***/ })

}]);