/** @type {import('tailwindcss').Config} */
export default {
	content: ['./resources/js/**/*.{svelte,js}'],
	theme: {
		extend: {
			width: {
				120: '30rem',
			}
		},
	},
	plugins: [require('daisyui'), require('@tailwindcss/typography'), require('@tailwindcss/line-clamp')],
	daisyui: {
		themes: [
			"light",
			"dark",
			"cupcake",
			"bumblebee",
			"emerald",
			"corporate",
			"synthwave",
			"retro",
			"cyberpunk",
			"valentine",
			"halloween",
			"garden",
			"forest",
			"aqua",
			"lofi",
			"pastel",
			"fantasy",
			"wireframe",
			"black",
			"luxury",
			"dracula",
			"cmyk",
			"autumn",
			"business",
			"acid",
			"lemonade",
			"night",
			"coffee",
			"winter",
		]
	}
}

