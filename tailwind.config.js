/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        warning: '#FFE61B',
      },
      backgroundColor: {
        warning: '#FFE61B', // Replace with your desired background color
      },
    },
  },
  plugins: [require('daisyui')],
};
