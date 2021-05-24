const mix = require('laravel-mix');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/css/main.scss', 'public/css')
    .copy("resources/css/fonts.css", "public/css")
    .copyDirectory("resources/fonts/", "public/fonts/", false)

    .webpackConfig({
        plugins: [
            new SVGSpritemapPlugin(
                'resources/images/icons/*.svg',
                {
                    output: {
                        filename: 'images/sprite.svg',
                        svg: {
                            sizes: false
                        },
                        svgo: {
                            plugins: [
                                {
                                    'removeStyleElement': false
                                },
                            ]
                        },
                    },
                    sprite: {
                        prefix: 'icon-',
                        generate: {
                            title: false,
                        },
                    },
                }
            ),
            // Копируем картинки из каталога ресурсов в публичный каталог
            new CopyWebpackPlugin({
                patterns: [
                    {
                        from: 'resources/images',
                        to: 'images',
                        globOptions: {
                            ignore: ["**/icons/**"], // Игнорируем каталог с иконками
                        },
                    },
                ],
            }),
        ],
    })

