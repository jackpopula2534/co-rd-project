import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            "login-pastel": "#fa9583",
            "login-green": "#048482",
            tomato: "#FF6347",
            "headbar-green": "#038482",
            "sidebar-green": "#3f9a99",
            "main-color": "#048482",
            "card-color": "#ecf5f5",
            // rm detail
            "gray-brown-500": "#7f7f7f",
            "gray-brown-400": "#afafaf",
            "gray-brown-300": "#d4d9d9",
            "gray-brown-200": "#ebebeb",

            "pastel-300": "#ffc2b8",
            "pastel-600": "#fa9583",
            "pastel-800": "#e0715e",

            "green-tea-600": "#61d38e",
            "pigment-red-600": "#C70039",
        },
        fontSize: {
            sm: "0.8rem",
            base: "1rem",
            xl: "1.25rem",
            "2xl": "1.563rem",
            "3xl": "2rem",
            "4xl": "4rem",
            "5xl": "6rem",
        },
    },

    plugins: [forms, typography, require("flowbite/plugin")],
};
