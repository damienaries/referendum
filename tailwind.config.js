const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'gray-background': '#f7f8fc',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                'custom': '1200px',
            },
            boxShadow: {
                'small': '4px 4px 15px 0 rgba(36, 37, 38, 0.08)',
                'large': '3px 4px 15px 0 rgba(36, 37, 38, 0.22)',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],
};
