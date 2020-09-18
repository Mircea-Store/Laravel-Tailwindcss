module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors:{
        cat_color: '#ddd',
        default_color: '#16cddd',
        custom_header: '#44733e3d',
        custom_hover:'#16cddd',
        sm_header: '#0d2629b8',
      },
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}