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
        extend: {
            fontFamily: {
                'primary': ['Ubuntu Mono'],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
