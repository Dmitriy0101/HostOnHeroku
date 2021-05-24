@extends("layout")

<?php
$arrayCategories = [
    ['id' => 0, 'image' => 'images/categories/image1.png', 'title' => 'Косметика и гигиена'],
    ['id' => 1, 'image' => 'images/categories/image2.png', 'title' => 'Техника и электроника'],
    ['id' => 2, 'image' => 'images/categories/image3.png', 'title' => 'Повседневная одежда'],
    ['id' => 3, 'image' => 'images/categories/image4.png', 'title' => 'Одежда и обувь'],
    ['id' => 4, 'image' => 'images/categories/image5.png', 'title' => 'Сапоги и туфли '],
    ['id' => 5, 'image' => 'images/categories/image6.png', 'title' => 'Универсальное'],
    ['id' => 6, 'image' => 'images/categories/image7.png', 'title' => 'Сумки и кошельки'],
    ['id' => 7, 'image' => 'images/categories/image8.png', 'title' => 'Нижнее бельё'],
    ['id' => 8, 'image' => 'images/categories/image9.png', 'title' => 'Спортивная обувь '],
    ['id' => 9, 'image' => 'images/categories/image10.png', 'title' => 'Сапоги и туфли ']
];
$arrayCard = [
    ['id' => 0, 'time' => '— 15 min', 'text' => 'Текст карточки первый'],
    ['id' => 1, 'time' => '— 20 min', 'text' => 'Текст карточки второй'],
    ['id' => 2, 'time' => '— 11 min', 'text' => 'Текст карточки третий'],
    ['id' => 3, 'time' => '— 9 min', 'text' => 'Текст карточки последний']
];
$arrayWeapons = [
    ['id' => 0, 'label' => 'Новинка', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 1, 'label' => 'Акция', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 2, 'label' => '-70%', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 3, 'label' => 'топ продаж', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 4, 'label' => 'Новинка', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 5, 'label' => 'Акция', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 6, 'label' => '-70%', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 7, 'label' => 'топ продаж', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 4, 'label' => 'Новинка', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '10 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 5, 'label' => 'Акция', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '2 отзыва', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 6, 'label' => '-70%', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '12 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
    ['id' => 7, 'label' => 'топ продаж', 'image' => 'images/weapon/Mossberg.jpg', 'reviews' => '46 отзывов', 'new-price' => '27 632.65₴', 'old-price' => '32 509₴', 'heading' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic'],
];

$labels = [
    ['id' => 0, 'text' => 'Новинка', 'color' => 'label--green'],
    ['id' => 1, 'text' => 'Акция', 'color' => 'label--blue'],
    ['id' => 2, 'text' => '-70%', 'color' => 'label--red'],
    ['id' => 3, 'text' => 'топ продаж', 'color' => 'label--yellow'],
]

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
                                    <img loading="lazy" class="lozad" data-src="{{asset($category['image'])}}"
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
                                    <use href="images/sprite.svg#icon-arrow"></use>
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
                                    <svg class="card__clock icon icon-clock" width="18" height="18">
                                        <use xlink:href="images/sprite.svg#icon-clock"></use>
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
        <div class="container container__medium">
            <div class="catalog-accessories row row row-cols-lg-2 row-cols-md-1 row-cols-1 mx-0">
                <div class="col col-sm-12 px-0">
                    <div class="row row-cols-2 mx-0">
                        <div class="col col-md-6 col-12 px-0">
                            <div class="catalog__block equipment">
                                <div class="catalog__item">
                                    <img class="catalog__img" loading="lazy" class="lozad"
                                         data-src="images/weapon-catalog/cat1.jpg"
                                         alt="">
                                    <div class="button__square">
                                        <button class="button__square--theme-white">
                                            <span class="button__square--text-white">Снаряжение</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-12 px-0">
                                <div class="catalog__block knives">
                                    <div class="catalog__item">
                                        <img class="catalog__img"
                                             loading="lazy" class="lozad" data-src="images/weapon-catalog/cat2.jpg"
                                             alt="">
                                        <div class="button__square">
                                            <button class="button__square--theme-white">
                                                <span class="button__square--text-white">Ножи и инструменты</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-12 px-0">
                            <div class="catalog__block shots">
                                <div class="catalog__item catalog--theme-tall">
                                    <img class="catalog__img"
                                         loading="lazy" class="lozad" data-src="images/weapon-catalog/cat3.jpg"
                                         alt="">
                                    <div class="button__square">
                                        <button class="button__square--theme-white">
                                            <span class="button__square--text-white">Оружие</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col col-sm-12 px-0">
                    <div class="row row-cols-1 mx-0">
                        <div class="col col-md-6 col-12 px-0">
                            <div class="catalog__block cartridges">
                                <div class="catalog__item">
                                    <img class="catalog__img" loading="lazy" class="lozad"
                                         data-src="images/weapon-catalog/cat4.jpg"
                                         alt="">
                                    <div class="button__square">
                                        <button class="button__square--theme-white">
                                            <span class="button__square--text-white">Патроны</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-12 px-0">
                            <div class="catalog__block accessories">
                                <div class="catalog__item">
                                    <img class="catalog__img"
                                         loading="lazy" class="lozad" data-src="images/weapon-catalog/cat5.jpg"
                                         alt="">
                                    <div class="button__square">
                                        <button class="button__square--theme-white">
                                            <span class="button__square--text-white">Аксессуары</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-12 col-12 px-0">
                            <div class="catalog__block range">
                                <div class="catalog__item catalog--theme-wide">
                                    <img class="catalog__img"
                                         loading="lazy" class="lozad" data-src="images/weapon-catalog/cat6.jpg"
                                         alt="">
                                    <div class="button__square">
                                        <button class="button__square--theme-white">
                                            <span class="button__square--text-white">Тир</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="weapons container container__big">
        <div id="weapons-content" class="weapons__content">
            @foreach($arrayWeapons as $weapon)
                <div class="col weapon">
                    <div class="weapon-card">
                        <div class="weapon-card__block">
                            <div class="weapon-card__content">
                                <a href="#" class="weapon-card__photo">
                                    <picture class="weapon-card__picture">
                                        <source srcset="{{asset($weapon['image'])}}">
                                        <img loading="lazy" class="lozad" data-src="{{asset($weapon['image'])}}">
                                    </picture>
                                </a>
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <a href="#" class="activity__gift">
                                        <svg class="gift__icon" width="20" height="20">
                                            <use href='images/sprite.svg#icon-gift-box'></use>
                                        </svg>
                                    </a>
                                    <a class="weapon-card__heading">
                                        {{$weapon['heading']}}
                                    </a>
                                    <div class="weapon-card__rating rating">
                                        <svg class="rating__icon" width="61" height="16">
                                            <use href='images/sprite.svg#icon-stars'></use>
                                        </svg>
                                        <a href="#"
                                           class="rating__reviews reviews">{{$weapon['reviews']}}</a>
                                    </div>
                                    <div class="weapon-card__trade trade row mx-0 h-100">
                                        <div class="trade__prices prices">
                                            @if ($weapon['old-price'] !== '')
                                                <div
                                                    class="prices__old">{{$weapon['old-price']}}</div>
                                            @endif
                                            <div class="prices__new">{{$weapon['new-price']}}</div>
                                        </div>
                                        <button
                                            class="weapon-card__buttons buy-button row button--scale">
                                            <div class="buy-button__text">Купить</div>
                                            <svg class="buy-button__icon" width="20" height="22">
                                                <use href='images/sprite.svg#icon-basket'></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="weapon-card__activity activity">
                                        @foreach ($labels as $label)
                                            @if ($weapon['label'] === $label['text'])
                                                <div
                                                    class="lable activity__label {{$label['color']}} ">
                                                    {{$label['text']}}
                                                </div>
                                                @break
                                            @endif
                                        @endforeach
                                        <div
                                            class="activity__actions actions ">
                                            <button class="actions__button button--scale">
                                                <svg class="actions__icon mb-3" width="20" height="20">
                                                    <use href='images/sprite.svg#icon-wish'></use>
                                                </svg>
                                            </button>
                                            <button class="actions__button button--scale">
                                                <svg class="actions__icon icon mb-3" width="20" height="20">
                                                    <use href='images/sprite.svg#icon-compare'></use>
                                                </svg>
                                            </button>
                                            <button class="actions__button button--scale">
                                                <svg class="actions__icon icon" width="20" height="20">
                                                    <use href='images/sprite.svg#icon-play'></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


