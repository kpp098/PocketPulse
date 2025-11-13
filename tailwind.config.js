import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'float': 'float 25s infinite',
                'pulse-slow': 'pulse 2s ease-in-out infinite',
                'spin-slow': 'spin 3s linear infinite',
                'slide-up': 'slideUp 0.8s ease-out',
            },
            keyframes: {
                float: {
                    '0%': { transform: 'translateY(100vh) scale(0)', opacity: '0' },
                    '50%': { opacity: '1' },
                    '100%': { transform: 'translateY(-100vh) scale(1)', opacity: '0' },
                },
                slideUp: {
                    'from': { opacity: '0', transform: 'translateY(50px)' },
                    'to': { opacity: '1', transform: 'translateY(0)' },
                },
            },
        },
    },

    plugins: [forms],
};
