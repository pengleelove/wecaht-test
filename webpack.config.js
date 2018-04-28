const webpackConfig = require('./node_modules/laravel-mix/setup/webpack.config')
const vuxLoader = require('vux-loader')
const ParallelUglifyPlugin = require('webpack-parallel-uglify-plugin');
// 打包所有vue 下面的页面css
const ExtractTextPlugin = require("extract-text-webpack-plugin")

module.exports = vuxLoader.merge(webpackConfig, {
  options: {},
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader',
        options: {
          loaders: {
            css: ExtractTextPlugin.extract({
              use: 'css-loader',
              fallback: 'vue-style-loader' // <- 这是vue-loader的依赖，所以如果使用npm3，则不需要显式安装
            })
          }
        }
      }
    ]
  },
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
