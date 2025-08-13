module.exports = {
	fluid: true,
	writingMode: true,
	fontWeight: true,
	fontFamilies: [
		{
			fontFamily:
				"-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif",
			name: 'System Font',
			slug: 'system-font',
		},
		{
			fontFace: [
				{
					fontFamily: 'Inter',
					fontStretch: 'normal',
					fontStyle: 'normal',
					fontWeight: '300 900',
					src: [
						'file:./assets/fonts/inter/Inter-VariableFont_slnt,wght.woff2',
					],
				},
			],
			fontFamily: '"Inter", sans-serif',
			name: 'Inter',
			slug: 'body_old',
		},
		{
			name: 'Oswald',
			slug: 'title',
			fontFamily: 'Oswald, sans-serif',
			fontFace: [
				{
					src: ['file:./assets/fonts/oswald/oswald-200-normal.woff2'],
					fontWeight: '200',
					fontStyle: 'normal',
					fontFamily: 'Oswald',
				},
				{
					src: ['file:./assets/fonts/oswald/oswald-300-normal.woff2'],
					fontWeight: '300',
					fontStyle: 'normal',
					fontFamily: 'Oswald',
				},
				{
					src: ['file:./assets/fonts/oswald/oswald-400-normal.woff2'],
					fontWeight: '400',
					fontStyle: 'normal',
					fontFamily: 'Oswald',
				},
				{
					src: ['file:./assets/fonts/oswald/oswald-500-normal.woff2'],
					fontWeight: '500',
					fontStyle: 'normal',
					fontFamily: 'Oswald',
				},
				{
					src: ['file:./assets/fonts/oswald/oswald-600-normal.woff2'],
					fontWeight: '600',
					fontStyle: 'normal',
					fontFamily: 'Oswald',
				},
				{
					src: ['file:./assets/fonts/oswald/oswald-700-normal.woff2'],
					fontWeight: '700',
					fontStyle: 'normal',
					fontFamily: 'Oswald',
				},
			],
		},
		{
			name: 'IBM Plex Sans',
			slug: 'body',
			fontFamily: '"IBM Plex Sans", sans-serif',
			fontFace: [
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-100-normal.woff2',
					],
					fontWeight: '100',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-200-normal.woff2',
					],
					fontWeight: '200',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-300-normal.woff2',
					],
					fontWeight: '300',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-400-normal.woff2',
					],
					fontWeight: '400',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-500-normal.woff2',
					],
					fontWeight: '500',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-600-normal.woff2',
					],
					fontWeight: '600',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-700-normal.woff2',
					],
					fontWeight: '700',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-100-italic.woff2',
					],
					fontWeight: '100',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-200-italic.woff2',
					],
					fontWeight: '200',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-300-italic.woff2',
					],
					fontWeight: '300',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-400-italic.woff2',
					],
					fontWeight: '400',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-500-italic.woff2',
					],
					fontWeight: '500',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-600-italic.woff2',
					],
					fontWeight: '600',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans/ibm-plex-sans-700-italic.woff2',
					],
					fontWeight: '700',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans"',
				},
			],
		},
		{
			name: 'IBM Plex Sans Condensed',
			// slug: 'ibm-plex-sans-condensed',
			slug: 'title_2',
			fontFamily: '"IBM Plex Sans Condensed", sans-serif',
			fontFace: [
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-100-normal.woff2',
					],
					fontWeight: '100',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-200-normal.woff2',
					],
					fontWeight: '200',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-300-normal.woff2',
					],
					fontWeight: '300',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-400-normal.woff2',
					],
					fontWeight: '400',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-500-normal.woff2',
					],
					fontWeight: '500',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-600-normal.woff2',
					],
					fontWeight: '600',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-700-normal.woff2',
					],
					fontWeight: '700',
					fontStyle: 'normal',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-100-italic.woff2',
					],
					fontWeight: '100',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-200-italic.woff2',
					],
					fontWeight: '200',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-300-italic.woff2',
					],
					fontWeight: '300',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-400-italic.woff2',
					],
					fontWeight: '400',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-500-italic.woff2',
					],
					fontWeight: '500',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-600-italic.woff2',
					],
					fontWeight: '600',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
				{
					src: [
						'file:./assets/fonts/ibm-plex-sans-condensed/ibm-plex-sans-condensed-700-italic.woff2',
					],
					fontWeight: '700',
					fontStyle: 'italic',
					fontFamily: '"IBM Plex Sans Condensed"',
				},
			],
		},
	],
	fontSizes: [
		{
			fluid: false,
			name: 'Small',
			size: '0.9rem',
			slug: 'small',
		},
		{
			fluid: false,
			name: 'Medium',
			size: '1.05rem',
			slug: 'medium',
		},
		{
			fluid: {
				min: '1.39rem',
				max: '1.85rem',
			},
			name: 'Large',
			size: '1.85rem',
			slug: 'large',
		},
		{
			fluid: {
				min: '1.85rem',
				max: '2.5rem',
			},
			name: 'Extra Large',
			size: '2.5rem',
			slug: 'x-large',
		},
		{
			fluid: {
				min: '2.5rem',
				max: '3.27rem',
			},
			name: 'Extra Extra Large',
			size: '3.27rem',
			slug: 'xx-large',
		},
		{
			fluid: {
				min: '1rem',
				max: '7rem',
			},
			name: 'Extra Extra Extra Large',
			size: '7rem',
			slug: 'xxx-large',
		},
	],
};
