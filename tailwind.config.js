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
      
    },
  },
  plugins: [],
}
