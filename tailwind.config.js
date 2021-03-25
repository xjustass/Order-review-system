module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {

    extend: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            electric: '#18FFFF',
            primary: '#212121',
            secondary:'#2F576E',
        },
        fontFamily:{
            body: ['Poppins']
        },
    }
  },
  variants: {
    extend: {}
  },

}
