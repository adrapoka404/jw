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
        'fondo-espiral': "url('/imgs/fondo_espiral.png')",
        'fondo-menu': "url('/imgs/fondo_menu.png')",
      },
      fontFamily: {
        'nunito': ['sans-serif'],
        'dm': ['DM Serif Display', 'serif'],
      },
      dropShadow:{
        '3xl':'10px 15px 5px rgba(0, 0, 0, 1)',
      },
      letterSpacing: {
        widest: '.35em',
      }
    },
    colors: {
      'gold': {
        300: '#ae9253',
        500: '#8F7B40',
        600: '#6F4A27',
      },
      'black': '#000',
      'white': '#fff',
      'red' : {
        100:'#ffbfb0',
        200:'#ff9688',
        300:'#ff6961',
        400:'#e2504c',
        500:'#c63637'
      },
      'green': {
        100:'#cfffca',
        200:'#a5eea0',
        300:'#77dd77',
        400:'#5dc460',
        500:'#42ab49'
      },
      
    },
  },
  plugins: [],
}
