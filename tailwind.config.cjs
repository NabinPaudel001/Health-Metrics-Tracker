/** @type {import('tailwindcss').Config} */
export default {
  content: ["./*.{html,php,js}"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
};
