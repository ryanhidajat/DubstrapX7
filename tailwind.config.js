/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./templates/**/*.html",
    "./parts/**/*.html",
    "./patterns/**/*.php",
    "./inc/**/*.php",
    "./*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        dubstrap: {
          dark: '#0a0a0a',
          navbar: '#111111',
          accent: '#0088cc',
          'accent-hover': '#005580',
          muted: '#777777',
          border: '#1f1f1f',
          body: '#e5e5e5',
          card: '#171717',
          footer: '#0a0a0a'
        }
      },
      fontFamily: {
        sans: ['system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', 'sans-serif'],
      },
      maxWidth: {
        container: '1170px'
      }
    },
  },
  corePlugins: {
    preflight: false,
  },
  plugins: [],
};
