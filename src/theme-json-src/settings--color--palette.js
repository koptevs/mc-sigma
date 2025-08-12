// import * as twPalette from './tw-palette'
const twPalette = require('../tw-palette');

const primary = twPalette["sky-900"]
const buttonBg = twPalette["sky-900"]
const buttonBgHover = twPalette["sky-800"]
const buttonShadow = twPalette['gray-200']

module.exports = [
	{
		color: primary,
		name: 'Primary',
		slug: 'primary',
	},
	{
		color: '#7456F1',
		name: 'Secondary',
		slug: 'secondary',
	},
	{
		color: '#ffffff',
		name: 'White',
		slug: 'white',
	},
	{
		color: '#fefefe',
		name: 'Base',
		slug: 'base',
	},
	{
		color: '#000000',
		name: 'Black',
		slug: 'black',
	},
	{
		color: '#2c2c2c',
		name: 'Contrast',
		slug: 'contrast',
	},
	{
		color: twPalette['cyan-800'],
		name: 'Accent',
		slug: 'accent',
	},
	{
		color: '#4aa775',
		name: 'Accent Light',
		slug: 'accent-light',
	},
	{
		color: '#363636',
		name: 'Gray',
		slug: 'gray',
	},
	{
		color: '#2d2d2d',
		name: 'Dark Gray',
		slug: 'dark-gray',
	},
	{
		color: '#D3D3D3',
		name: 'Light Text',
		slug: 'light-text',
	},
	{
		color: 'oklch(0.24 0.05 254.58 / 0.33)',
		name: 'White Text Color',
		slug: 'white-text-color',
	},
	{
		color: buttonBg,
		name: 'Button Background',
		slug: 'button-bg',
	},
	{
		color: buttonBgHover,
		name: 'Button Background Hover Color',
		slug: 'button-bg-hover',
	},
	{
		color: buttonShadow,
		name: 'Button Shadow',
		slug: 'button-shadow',
	},
	{
		color: '#FAFAFA',
		name: 'Button Hover Text Color ',
		slug: 'button-hover-text-color',
	},
	{
		color: 'rgba(0, 0, 0, 0.1)',
		name: 'Black Transparent 10',
		slug: 'black-transparent-10',
	},
	{
		color: 'rgba(0, 0, 0, 0.2)',
		name: 'Black Transparent 20',
		slug: 'black-transparent-20',
	},
	{
		color: 'rgba(0, 0, 0, 0.3)',
		name: 'Black Transparent 30',
		slug: 'black-transparent-30',
	},
];
