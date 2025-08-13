const utils = require( './utils' );
const pkg = require( '../../package.json' );
const ignore = [
	'dist',
	'node_modules',
	'src',
	'package.json',
	'package-lock.json',
];

utils.copyDir( './', `./dist/${ pkg.name }-${ pkg.version }`, ignore );
