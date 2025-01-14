import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};

module.exports = {
    theme: {
        extend: {
            animation: {
                marquee: "marquee 20s linear infinite",
            },
            keyframes: {
                marquee: {
                    from: { transform: "translateX(100%)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
        },
    },
};
