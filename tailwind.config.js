/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js'
    ],
    theme: {
        extend: {
            colors: {
                'primary': {
                    'light': '#3e4143',
                    DEFAULT: '#1c1d1f'
                },
                'udemy': {
                    'light': '#a436f0',
                    'dark': '#401b9c',
                    DEFAULT: '#5624d0'
                },
                'accent': '#eceb98',
            },

            maxWidth: {
                '8xl': '84rem',
            }
        },

        fontFamily: {
            'heading': ['Noto Serif JP', 'serif'],
            'text': ['Roboto', 'sans-serif']
        },

        plugins: [],
    }
};
