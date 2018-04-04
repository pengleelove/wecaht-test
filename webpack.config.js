const webpackConfig = require('./node_modules/laravel-mix/setup/webpack.config')
const vuxLoader = require('vux-loader')
const ParallelUglifyPlugin = require('webpack-parallel-uglify-plugin');


module.exports = vuxLoader.merge(webpackConfig, {
  options: {},
  plugins: [
    { name: 'vux-ui' },
    new ParallelUglifyPlugin({
      cacheDir: '.cache/',
      uglifyJS:{
        output: {
          comments: false
        },
        compress: {
          warnings: true
        }
      }
    }),
    // new webpack.optimize.OccurenceOrderPlugin(),
    // new webpack.DefinePlugin({
    //   'process.env': {
    //     'NODE_ENV': JSON.stringify('production')
    //   }
    // }),
    // new webpack.optimize.UglifyJsPlugin({
    //   compressor: {
    //     warnings: false
    //   }
    // })
    // new webpack.optimize.UglifyJsPlugin({
    //   compress: {
    //     warnings: false
    //   }
    // })
    // {
    //   name: 'less-theme',
    //   path: './resources/assets/wx/css/theme.less'
    // }
  ]
})
