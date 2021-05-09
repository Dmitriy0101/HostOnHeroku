@extends("layout")

<?php
$arrayCategories = [
    ['id' => 0, 'image' => 'assets/images/categories/image1.png', 'title' => 'Косметика и гигиена'],
    ['id' => 1, 'image' => 'assets/images/categories/image2.png', 'title' => 'Техника и электроника'],
    ['id' => 2, 'image' => 'assets/images/categories/image3.png', 'title' => 'Повседневная одежда'],
    ['id' => 3, 'image' => 'assets/images/categories/image4.png', 'title' => 'Одежда и обувь'],
    ['id' => 4, 'image' => 'assets/images/categories/image5.png', 'title' => 'Сапоги и туфли '],
    ['id' => 5, 'image' => 'assets/images/categories/image6.png', 'title' => 'Универсальное'],
    ['id' => 6, 'image' => 'assets/images/categories/image7.png', 'title' => 'Сумки и кошельки'],
    ['id' => 7, 'image' => 'assets/images/categories/image8.png', 'title' => 'Нижнее бельё'],
    ['id' => 8, 'image' => 'assets/images/categories/image9.png', 'title' => 'Спортивная обувь '],
    ['id' => 9, 'image' => 'assets/images/categories/image10.png', 'title' => 'Сапоги и туфли ']
];
$arrayCard = [
    ['id' => 0, 'time' => '— 15 min', 'text' => 'Текст карточки первый'],
    ['id' => 1, 'time' => '— 20 min', 'text' => 'Текст карточки второй'],
    ['id' => 2, 'time' => '— 11 min', 'text' => 'Текст карточки третий'],
    ['id' => 3, 'time' => '— 9 min', 'text' => 'Текст карточки последний']
];
?>


@section('categories')
    <div class="categories">
        <div class="container container__big">
            <div class="categories-block">
                <div class="container container__small">
                    <div class="categories-block__header row row-cols-1 row-cols-sm-2 mx-0">
                        <div class="col-md-6 col-8 px-0">
                            <div class="title">Популярные категории</div>
                        </div>
                        <a class="button button__text col-4 col-sm-4 col-md-3 col-xl-2 ml-auto"
                           href="#">все категории </a>
                    </div>
                    <div class="slider row mx-0">
                        @foreach($arrayCategories as $category)
                            <div class="category__item category col">
                                <picture class="category__picture">
                                    <source srcset="{{asset($category['image'])}}">
                                    <img src="{{asset($category['image'])}}" alt="{{$category['title']}}">
                                </picture>
                                <div class="category__title">{{ $category['title'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="common">
        <div class="common__block container container__small">
            <div class="seo col-10 col-xxl-3 px-0">
                <div class="row">
                    <div class="seo__block">
                        <div class="seo__title">Тут должен быть какой то текст, потом <br>
                            придумаем какой точно будет =)
                        </div>
                        <div class="seo__btn">
                            <button class="button button--theme-flat">
                            <span class="button__text">замовити зворотній
                            зв’язок</span>
                                <svg class="seo__icon arrow" width="18" height="18">
                                    <use href="/assets/images/sprite.svg#icon-arrow"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container__small">
                <div class="products row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                    @foreach($arrayCard as $card)
                        <div class="col mb-4">
                            <div class="card">
                                <div class="card__title">{{($card['text'])}}</div>
                                <div class="card__time ">
                                    <svg class="card__clock clock" width="18" height="18">
                                        <use href="/assets/images/sprite.svg#icon-clock"></use>
                                    </svg>
                                    <span>{{($card['time'])}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="container container__big">
            <div class="catalog-accessories row row-cols-1 row-cols-md-2 mx-0">
                <div class="col first-col px-0">
                    <div class="row row-cols-2 mx-0">
                        <div class=" col-6 px-0">
                            <div class="catalog__block">
                                <a class="catalog__link col px-0">
                                    <picture class="catalog__img">
                                        <source srcset="/assets/images/weapon-catalog/cat1.jpg">
                                        <img class="ctl" src="/assets/images/weapon-catalog/cat1.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class=" col-6 px-0">
                                <div class="catalog__block">
                                    <a class="catalog__link col px-0">
                                        <picture class="catalog__img">
                                            <source srcset="/assets/images/weapon-catalog/cat2.jpg">
                                            <img class="ctl" src="/assets/images/weapon-catalog/cat2.jpg" alt="">
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="/assets/images/weapon-catalog/cat3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6 col-img">
                            <img src="/assets/images/weapon-catalog/cat4.jpg" alt="">
                            <img src="/assets/images/weapon-catalog/cat6.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img src="/assets/images/weapon-catalog/cat5.jpg" alt="">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="card__weapon">
        <div class="row">
            <div class="col-sm-3">
                <div class="weapon__block">
                    <div class="weapon__lable weapon__lable-new">
                        Новинка
                    </div>
                    <div class="weapon__container">
                        <div class="weapon__link">
                            <img class="weapon__img" src="/assets/images/weapon/Mossberg.png" alt="">
                        </div>
                        <div class="wish">
                            <div class="weapon__item">
                                <svg class="fav">
                                    <use xlink:href="/assets/images/icons.svg#icon-fav"/>
                                </svg>
                            </div>
                            <div class="weapon__item">
                                <svg class="libra">
                                    <use xlink:href="/assets/images/icons.svg#icon-libra"/>
                                </svg>
                            </div>
                            <div class="weapon__item">
                                <svg class="play-button">
                                    <use xlink:href="/assets/images/icons.svg#icon-play-button"/>
                                </svg>
                            </div>
                        </div>
                        <div class="present">
                            <img src="/assets/images/present.svg" alt="">
                        </div>
                        <div class="weapon__info">
                            <span class="weapon__name">Ружье Mossberg 590M Mag-Fed</span>
                            <div class="weapon__rating">
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-rait">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <span class="weapon__review">10 отзывов</span>
                            </div>
                        </div>
                        <div class="weapon-price">
                            <div class="weapon-price__old">
                                32 509<span class="currency-old">&#8372</span>
                            </div>
                            <div class="weapon-price__new">
                                <div class="weapon-price__small">
                                    27 632.65<span class="currency-new">&#8372</span>
                                </div>
                                <svg class="icon-basket">
                                    <use xlink:href="/assets/images/icons.svg#icon-basket"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="weapon__block">
                    <div class="weapon__lable weapon__lable-action">
                        Акции
                    </div>
                    <div class="weapon__container">
                        <div class="weapon__link">
                            <img class="weapon__img" src="/assets/images/weapon/Mossberg.png" alt="">
                        </div>
                        <div class="wish">
                            <div class="weapon__item">
                                <svg class="fav">
                                    <use xlink:href="/assets/images/icons.svg#icon-fav"/>
                                </svg>
                            </div>
                            <div class="weapon__item">
                                <svg class="libra">
                                    <use xlink:href="/assets/images/icons.svg#icon-libra"/>
                                </svg>
                            </div>
                            <div class="weapon__item">
                                <svg class="play-button">
                                    <use xlink:href="/assets/images/icons.svg#icon-play-button"/>
                                </svg>
                            </div>
                        </div>
                        <div class="present">
                            <img src="/assets/images/present.svg" alt="">
                        </div>
                        <div class="weapon__info">
                            <span class="weapon__name">Ружье Mossberg 590M Mag-Fed</span>
                            <div class="weapon__rating">
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-rait">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <span class="weapon__review">2 отзывов</span>
                            </div>
                        </div>
                        <div class="weapon-price">
                            <div class="weapon-price__old">
                                32 509<span class="currency-old">&#8372</span>
                            </div>
                            <div class="weapon-price__new">
                                <div class="weapon-price__small">
                                    27 632.65<span class="currency-new">&#8372</span>
                                </div>
                                <svg class="icon-basket">
                                    <use xlink:href="/assets/images/icons.svg#icon-basket"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="weapon__block">
                    <div class="weapon__lable weapon__lable-sale">
                        -70%
                    </div>
                    <div class="weapon__container">
                        <div class="weapon__link">
                            <img class="weapon__img" src="/assets/images/weapon/Mossberg.png" alt="">
                        </div>
                        <div class="wish">
                            <div class="weapon__item">
                                <svg class="fav">
                                    <use xlink:href="/assets/images/icons.svg#icon-fav"/>
                                </svg>
                            </div>
                            <div class="weapon__item">
                                <svg class="libra">
                                    <use xlink:href="/assets/images/icons.svg#icon-libra"/>
                                </svg>
                            </div>
                            <div class="weapon__item">
                                <svg class="play-button">
                                    <use xlink:href="/assets/images/icons.svg#icon-play-button"/>
                                </svg>
                            </div>
                        </div>
                        <div class="present">
                            <img src="/assets/images/present.svg" alt="">
                        </div>
                        <div class="weapon__info">
                            <span class="weapon__name">Ружье Mossberg 590M Mag-Fed</span>
                            <div class="weapon__rating">
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-rait">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <span class="weapon__review">12 отзывов</span>
                            </div>
                        </div>
                        <div class="weapon-price">
                            <div class="weapon-price__old">
                                32 509<span class="currency-old">&#8372</span>
                            </div>
                            <div class="weapon-price__new">
                                <div class="weapon-price__small">
                                    27 632.65<span class="currency-new">&#8372</span>
                                </div>
                                <svg class="icon-basket">
                                    <use xlink:href="/assets/images/icons.svg#icon-basket"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="weapon__block">
                    <div class="weapon__lable weapon__lable-top">
                        топ продаж
                    </div>
                    <div class="weapon__container">
                        <div class="weapon__link">
                            <img class="weapon__img" src="/assets/images/weapon/Mossberg.png" alt="">
                        </div>
                        <div class="wish">
                            <div class="weapon__item">
                                <svg class="fav">
                                    <use xlink:href="/assets/images/icons.svg#icon-fav"/>
                                </svg>
                            </div>
                            <div class="weapon__item">
                                <svg class="libra">
                                    <use xlink:href="/assets/images/icons.svg#icon-libra"/>
                                </svg>
                            </div>
                            <div class="weapon__item">
                                <svg class="play-button">
                                    <use xlink:href="/assets/images/icons.svg#icon-play-button"/>
                                </svg>
                            </div>
                        </div>
                        <div class="present">
                            <img src="/assets/images/present.svg" alt="">
                        </div>
                        <div class="weapon__info">
                            <span class="weapon__name">Ружье Mossberg 590M Mag-Fed</span>
                            <div class="weapon__rating">
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-raiting">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <svg class="icon-rait">
                                    <use xlink:href="/assets/images/icons.svg#icon-raiting"/>
                                </svg>
                                <span class="weapon__review">46 отзывов</span>
                            </div>
                        </div>
                        <div class="weapon-price">
                            <div class="weapon-price__old">
                                32 509<span class="currency-old">&#8372</span>
                            </div>
                            <div class="weapon-price__new">
                                <div class="weapon-price__small">
                                    27 632.65<span class="currency-new">&#8372</span>
                                </div>
                                <svg class="icon-basket">
                                    <use xlink:href="/assets/images/icons.svg#icon-basket"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


