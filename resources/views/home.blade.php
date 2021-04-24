<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест</title>
    <link rel="stylesheet" href="{{ mix('/assets/css/main.css') }}" type="text/css">
</head>
<body>

<div class="content__top">
    <div class="content__bla">
        <div class="container">
            <div class="content__popular">
                <div class="title">
                    Популярные категории
                </div>
                <a href="#" class="button button-1">все категории</a>
            </div>
        </div>
        <div class="slider">
            <div class="slider__item">
                <div class="slider__link">
                    <img class="slider__img" src="/assets/images/cosmetics.png" alt="">
                </div>
                <div class="slider__info">
                    <a href="#">Косметика и <br> гигиена</a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__link">
                    <img class="slider__img" src="/assets/images/technics.png" alt="">
                </div>
                <div class="slider__info">
                    <a href="#">Техника и электроника</a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__link">
                    <img class="slider__img" src="/assets/images/casual wear.png" alt="">
                </div>
                <div class="slider__info">
                    <a href="#">Повседневная одежда</a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__link">
                    <img class="slider__img" src="/assets/images/clothes.png" alt="">
                </div>
                <div class="slider__info">
                    <a href="#">Одежда и обувь </a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__link">
                    <img class="slider__img" src="/assets/images/footwear.png" alt="">
                </div>
                <div class="slider__info">
                    <a href="#">Сапоги и туфли </a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__link">
                    <img class="slider__img" src="/assets/images/cosmetics.png" alt="">
                </div>
                <div class="slider__info">
                    <a href="#">Косметика и <br> гигиена</a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__link">
                    <img class="slider__img" src="/assets/images/technics.png" alt="">
                </div>
                <div class="slider__info">
                    <a href="#">Техника и электроника</a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__link">
                    <img class="slider__img" src="/assets/images/casual wear.png" alt="">
                </div>
                <div class="slider__info">
                    <a href="#">Повседневная одежда</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content__footer">
    <div class="container">
        <div class="content__card">
            <button class="button button-2">замовити зворотній зв’язок</button>
            <svg class="arrow">
                <use xlink:href="/assets/images/icons.svg#icon-arrow"/>
            </svg>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card__title">Текст карточки первый</div>
                    <div class="card__time">
                        <svg class="clock">
                            <use xlink:href="/assets/images/icons.svg#icon-clock"/>
                        </svg>
                        <span class="clock-info"> — 15 min</span>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card__title">Текст карточки второй</div>
                    <div class="card__time">
                        <svg class="clock">
                            <use xlink:href="/assets/images/icons.svg#icon-clock"/>
                        </svg>
                        <span class="clock-info">— 20 min</span>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card__title">Текст карточки третий</div>
                    <div class="card__time">
                        <svg class="clock">
                            <use xlink:href="/assets/images/icons.svg#icon-clock"/>
                        </svg>
                        <span class="clock-info">— 11 min</span>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card__title">Текст карточки последний</div>
                    <div class="card__time">
                        <svg class="clock">
                            <use xlink:href="/assets/images/icons.svg#icon-clock"/>
                        </svg>
                        <span class="clock-info">— 9 min</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ mix('/assets/js/app.js') }}"></script>
<script src="{{ mix('/assets/js/jquery.min.js') }}"></script>
<script src="{{ mix('/assets/js/slick.min.js') }}"></script>
</body>
</html>
