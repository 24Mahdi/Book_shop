// tailwind.config.js

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        '15deg-gradient': 'linear-gradient(15deg, #eee 30%, #fff 30.1%)',
      },
    },
  },
  plugins: [
    require('tailwindcss-plugins/pagination')({
      /* Customizations here... */
    }),
  ],
}
