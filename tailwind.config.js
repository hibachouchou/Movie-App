/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        width: {
            '96': '24rem',
        }
    },
  },
  variants: {},
  plugins: [
    require('flowbite/plugin')
  ],
}