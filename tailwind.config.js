const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');


module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: [
        'bg-purple-600',
        'bg-red-600',
        'bg-green-600',
        'bg-yellow-600',
        'bg-blue-600'
    ],

    theme: {
        extend: {
            colors: {
                'gray-background': '#f7f8fc',
                purple: colors.purple,
                yellow: colors.yellow,
                red: colors.red,
                green: colors.green,
                blue: colors.blue,
                gray: colors.gray
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                76: '19rem',
                104: '26rem',
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
