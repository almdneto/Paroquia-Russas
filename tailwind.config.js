import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Instrument Sans', ...defaultTheme.fontFamily.sans],
                cinzel: ['Cinzel', 'serif'],
                garamond: ['EB Garamond', 'Georgia', 'serif'],
            },

            colors: {
                bg: '#0f1f15',
                header: '#162b1e',
                'header-alt': '#1a2a10',
                surface: '#132018',
                border: '#6a9a50',
                primary: '#8ab860',
                'primary-light': '#c8e89a',
                'primary-mid': '#a8c888',
                muted: '#7a9a6a',
                foreground: '#e0ead8',
                'foreground-strong': '#e8f0d8',
            },
        },
    },

    plugins: [],
};