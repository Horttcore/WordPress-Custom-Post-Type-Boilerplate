let mix = require("laravel-mix");

mix
  .react(
    "assets/js/index.js",
    "./dist/js/wordpress-client-plugin-boilerplate.js"
  )
  // .sass(
  //   "assets/scss/index.scss",
  //   "./dist/css/wordpress-client-plugin-boilerplate.css"
  // )
  .sourceMaps();
