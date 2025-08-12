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
			slug: 'body',
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
	]
};
