const mix = require('laravel-mix');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/
mix
    /*Настройка js*/
    .js('resources/assets/js/app.js', 'public/assets/js')
    /*Настройка sass*/
    .sass('resources/assets/sass/main.scss', 'public/assets/css')

    // Настраиваем webpack для обработки изображений
    .webpackConfig({
        plugins: [
            // Создаем svg-спрайт с иконками
            new SVGSpritemapPlugin(
                'resources/assets/images/icons/*.svg', // Путь относительно каталога с webpack.mix.js
                {
                    output: {
                        filename: 'assets/images/sprite.svg', // Путь относительно каталога public/
                        svg4everybody: false, // Отключаем плагин "SVG for Everybody"
                        chunk: {
                            keep: true, // Включаем, чтобы при сборке не было ошибок из-за отсутствия spritemap.js
                        },
                        svgo: {
                            plugins: [
                                {
                                    'removeStyleElement': false // Удаляем из svg теги <style>
                                },
                                {
                                    'removeAttrs': {
                                        attrs: ["fill", "stroke"] // Удаляем часть атрибутов для управления стилями из CSS
                                    }
                                },
                            ]
                        },
                    },
                    sprite: {
                        prefix: 'icon-', // Префикс для id иконок в спрайте, будет иметь вид 'icon-имя_файла_с_иконкой'
                        generate: {
                            title: false, // Не добавляем в спрайт теги <title>
                        },
                    },
                }
            ),
            // Копируем картинки из каталога ресурсов в публичный каталог
            new CopyWebpackPlugin({
                patterns: [
                    {
                        from: 'resources/assets/images', // Путь относительно каталога с webpack.mix.js
                        to: 'assets/images', // Путь относительно каталога public/,
                        globOptions: {
                            ignore: ["**/icons/**"], // Игнорируем каталог с иконками
                        },
                    },
                ],
            }),
        ],
    })

