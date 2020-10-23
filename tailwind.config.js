module.exports = {
	theme: {
		colors: {
			dark: "#11191F",
			light: "#F6F9FB",
			blue: "#047EDA",
			orange: "#ED9F5D",
			gray: "#88959F",
			transparent: "transparent",
			white: "white",
		},
		container: {
			padding: {
				default: '1.5rem',
				sm: '2rem',
				lg: '3rem',
				xl: '4rem',
			},
			center: true,
		},
		fontSize: {
			xs: ['0.8125rem', { lineHeight: '1rem' }],
			sm: ['0.875rem', { lineHeight: '1.25rem' }],
			base: ['1rem', { lineHeight: '1.5rem' }],
			lg: ['1.125rem', { lineHeight: '1.75rem' }],
			xl: ['1.25rem', { lineHeight: '1.75rem' }],
			'2xl': ['1.5rem', { lineHeight: '2rem' }],
			'3xl': ['1.875rem', { lineHeight: '2.25rem' }],
			'4xl': ['2.25rem', { lineHeight: '2.5rem' }],
			'5xl': ['3rem', { lineHeight: '1' }],
			'6xl': ['3.75rem', { lineHeight: '1' }],
			'7xl': ['4.5rem', { lineHeight: '1' }],
			'8xl': ['6rem', { lineHeight: '1' }],
			'9xl': ['8rem', { lineHeight: '1' }],
		},
		screens: {
			'sm': '640px',
			'md': '768px',
			'lg': '1024px',
			'xl': '1280px',
			'xxl': "1440px",
		},
		extend: {
			opacity: {
				'15': '0.15',
			}
		},
	},
	variants: {},
	plugins: [],
	purge: [
		'./src/**/*.html',
		'./src/**/*.vue',
		'./src/**/*.jsx',
		'./**/*.php'
	]
};
