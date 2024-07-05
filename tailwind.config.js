/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
  //...
  theme: {
      extend: {
          colors: {
              gray: {
                  100: '#f7f7f7',
                  200: '#e5e5e5',
                  700: '#333',
                  900: '#222',
              },
          },
      },
  },

}
  //...