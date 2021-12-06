let mix = require("laravel-mix")
require("mix-tailwindcss")

mix.js("src/js/app.js", "dist/")
	.js("src/js/dossier-candidature.js", "dist/")
	.sass("src/sass/style.scss", "./")
	.tailwind("./tailwind.config.js")
