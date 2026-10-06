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
          colors: {
                "on-background": "#141e1a",
                "tertiary-fixed": "#ece2ca",
                "surface-container-low": "#ebf6f0",
                "on-primary-container": "#a3d4c3",
                "on-primary": "#ffffff",
                "surface-container-highest": "#dae5df",
                "surface-container-lowest": "#ffffff",
                "secondary-container": "#c2e4ff",
                "error": "#ba1a1a",
                "on-surface-variant": "#404945",
                "tertiary-container": "#5b5442",
                "error-container": "#ffdad6",
                "inverse-surface": "#28332e",
                "primary-fixed-dim": "#a0d1c0",
                "surface": "#f1fcf6",
                "on-error": "#ffffff",
                "surface-variant": "#dae5df",
                "on-tertiary-fixed-variant": "#4c4635",
                "background": "#f1fcf6",
                "inverse-on-surface": "#e8f3ed",
                "outline-variant": "#c0c8c4",
                "on-surface": "#141e1a",
                "surface-container-high": "#e0ebe4",
                "surface-dim": "#d1ddd6",
                "outline": "#717975",
                "inverse-primary": "#a0d1c0",
                "on-secondary": "#ffffff",
                "on-error-container": "#93000a",
                "surface-container": "#e5f0ea",
                "secondary-fixed-dim": "#a9cbe5",
                "primary-container": "#2f5d50",
                "on-tertiary-container": "#d2c9b1",
                "on-primary-fixed": "#002019",
                "surface-bright": "#f1fcf6",
                "surface-tint": "#396759",
                "on-tertiary-fixed": "#201b0d",
                "on-secondary-fixed-variant": "#284a60",
                "tertiary-fixed-dim": "#cfc6af",
                "on-secondary-container": "#45667d",
                "secondary-fixed": "#c8e6ff",
                "on-secondary-fixed": "#001e2e",
                "on-tertiary": "#ffffff",
                "tertiary": "#433d2c",
                "on-primary-fixed-variant": "#204f42",
                "primary-fixed": "#bceddc",
                "secondary": "#416279",
                "primary": "#154539"
            },
            borderRadius: {
                "DEFAULT": "0.5rem",
                "lg": "1rem",
                "xl": "1.5rem",
                "full": "9999px"
            },
            spacing: {
                "gutter": "1rem",
                "space-xl": "1.5rem",
                "space-sm": "0.5rem",
                "space-lg": "1rem",
                "space-md": "0.75rem",
                "margin-lg": "2rem",
                "space-xs": "0.25rem",
                "margin": "1rem",
                "gutter-lg": "1.5rem",
                "margin-md": "1.5rem"
            },
            fontFamily: {
                "label-md": ["Inter", "sans-serif"],
                "headline-sm": ["Inter", "sans-serif"],
                "headline-kpi": ["Inter", "sans-serif"],
                "body-lg": ["Inter", "sans-serif"],
                "headline-lg": ["Inter", "sans-serif"],
                "headline-md": ["Inter", "sans-serif"],
                "label-lg": ["Inter", "sans-serif"],
                "headline-kpi-mobile": ["Inter", "sans-serif"],
                "body-sm": ["Inter", "sans-serif"],
                "body-md": ["Inter", "sans-serif"],
                "label-sm": ["Inter", "sans-serif"]
            },
            fontSize: {
                "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                "headline-sm": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                "headline-kpi": ["32px", { "lineHeight": "38px", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                "headline-lg": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                "headline-md": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                "label-lg": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
                "headline-kpi-mobile": ["28px", { "lineHeight": "34px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }],
                "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600" }]
            }
        },
    },


    plugins: [forms],
};
