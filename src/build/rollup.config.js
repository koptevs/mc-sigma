'use strict';

/**
 * External dependencies
 */
const path = require( 'path' );
const { babel } = require( '@rollup/plugin-babel' );
const { nodeResolve } = require( '@rollup/plugin-node-resolve' );
const commonjs = require( '@rollup/plugin-commonjs' );
const multi = require( '@rollup/plugin-multi-entry' );
const replace = require( '@rollup/plugin-replace' );

/**
 * Internal dependencies
 */
const babelConfig = require( './babel.config' );


let globals = {
	jquery: 'jQuery', // Ensure we use jQuery which is always available even in noConflict mode
	'@popperjs/core': 'Popper',
};
const external = [ 'jquery' ];

const plugins = [
	babel( {
		presets: babelConfig.presets,
		// Include the helpers in the bundle, at most one copy of each.
		babelHelpers: 'bundled',
	} ),
	replace( {
		'process.env.NODE_ENV': '"production"',
		preventAssignment: true,
	} ),
	nodeResolve(),
	commonjs(),
	multi(),
];

module.exports = {
	input: [
		path.resolve( __dirname, '../js/skip-link-focus-fix.js' ),
		path.resolve( __dirname, '../js/jquery-sticky.js' ),
		path.resolve( __dirname, '../js/script.js' ),
		path.resolve( __dirname, '../js/custom-javascript.js' ),
	],
	output: [
		{
			file: path.resolve( __dirname, `../../assets/js/theme.js` ),
			format: 'umd',
			globals,
			name: 'name?-MC-Sigma',
		},
		{
			file: path.resolve( __dirname, `../../assets/js/theme.min.js` ),
			format: 'umd',
			globals,
			name: 'name?-MC-Sigma',
		},
	],
	external,
	plugins,
};
