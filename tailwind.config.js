
/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  'node_modules/preline/dist/*.js',],
  theme: {
    extend: {
        height:{
            '128': '10vh'
        },
        translate: {
            '4.25': '-50%',
        },
        fontFamily: {
            mons:["Montserrat" , "Arial", "sans-serif"]
        }
    },
  },
  plugins: [require('preline/plugin'),],
}

