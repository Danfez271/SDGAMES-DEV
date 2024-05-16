
/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  'node_modules/preline/dist/*.js',],
  theme: {
    extend: {
        lineHeight: {
            'extra-tight': '3rem',
        },
        height:{
            '128': '10vh'
        },
        translate: {
            '4.25': '-50%',
        },
        fontFamily: {
            Kanit:["Kanit" , "Arial", "sans-serif"]
        },
        screens: {
            xs: "300px",
        },
    },
  },
  plugins: [require('preline/plugin'),],
}

