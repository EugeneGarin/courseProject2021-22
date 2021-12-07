module.exports = {
    darkMode: false,
    purge: {
        enabled: false,
        content: [
            'public/js/*.js',
            'public/css/*.css',
            'public/*.html',
        ]
    },
    theme: {
        fontFamily: {
            'primary': ['Open Sans'],
        },
        extend: {
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
