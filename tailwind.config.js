const { gray } = require('color-convert');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primaryy: "#868686",
        dark: "var(--dark)",
        light: "var(--light)",
        gray: "rgb(0, 0, 0, 0.2)",
      },
      fontFamily: {
        poppins: "Poppins",
      },
    },
  },
  plugins: [],
};

