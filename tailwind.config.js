/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            keyframes: {
                infinite: {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
            fontFamily: {
                urbanist: ["Urbanist", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
                quantico: ["Quantico", "sans-serif"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
