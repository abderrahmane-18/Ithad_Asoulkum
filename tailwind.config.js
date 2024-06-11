import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/js/**/*.js",
    ],
    plugins: [require("tw-elements/plugin.cjs")],
    theme: {
        extend: {
            colors: {
                primary: "#7bcbc2",
                secondary: "#104a7c",
                "primary-100": "#d7eff1",
            },
            fontFamily: {
                sans: ["Cairo", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
