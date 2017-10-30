//webpack.config.js

var webpack = require( 'webpack' );
var ExtractTextPlugin = require( 'extract-text-webpack-plugin' );

module.exports = function ( env ) {
	return {
		entry: './assets/js/app.js',
		output: {
			path: __dirname,
			filename: 'script.js'
		},
		module: {
			rules: [
				{
					test: /\.scss$/,
					use: ExtractTextPlugin.extract( {
						fallback: 'style-loader',
						use: [ 'css-loader', 'sass-loader' ]
					} )
				}
			]
		},
		plugins: [
			new ExtractTextPlugin( 'style.css' )
		]
	}
}
