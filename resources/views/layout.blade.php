<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тест</title>
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}" type="text/css">
</head>
<body>
<?php
$catalogMenu = [
    ['id' => 0, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'power_1', 'text' => 'Турбины', 'link' => '#'],
    ['id' => 1, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'cartridge', 'text' => 'Картриджи', 'link' => '#'],
    ['id' => 2, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'geometry', 'text' => 'Геометрии', 'link' => '#'],
    ['id' => 3, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'aktuator', 'text' => 'Актуаторы', 'link' => '#'],
    ['id' => 4, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'servoprivod', 'text' => 'Сервоприводы', 'link' => '#'],
    ['id' => 5, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'prokladki', 'text' => 'Прокладки', 'link' => '#'],
    ['id' => 6, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'zap4asti', 'text' => 'Прочие запчасти', 'link' => '#'],
    ['id' => 7, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'aktuator_1', 'text' => 'Электронновакуумные актуаторы', 'link' => '#'],
    ['id' => 8, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'body-tourbine', 'text' => 'Корпуса турбины', 'link' => '#'],
    ['id' => 9, 'image' => 'images/turbina/turbine.jpg', 'icon' => 'zap4asti_1', 'text' => 'Запчасти для сервопривода', 'link' => '#']
];

$basket = [
    ['id' => 0, 'image' => 'images/turbina/turbine.jpg', 'price' => 5000, 'count' => 4, 'coast' => 21000, 'services' => ['Регенерация турбины 500₴', 'Регенерация турбины за 1 день 500₴', ' Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины для Mercedes E-klasse (W211) 2.7CDI', 'alt' => '070-150-017 Картридж турбины для Mercedes E-klasse (W211) 2.7CDI'],
    ['id' => 1, 'image' => 'images/turbina/turbine2.jpg', 'price' => 5000, 'count' => 1, 'coast' => 5500, 'services' => ['Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины для Mercedes E-klasse', 'alt' => '070-150-017 Картридж турбины для Mercedes E-klasse'],
    ['id' => 1, 'image' => 'images/turbina/turbine3.jpg', 'price' => 5000, 'count' => 1, 'coast' => 5500, 'services' => ['Регенерация турбины за 1 день 500₴'], 'title' => '070-150-017 Картридж турбины E-klasse (W211)', 'alt' => '070-150-017 Картридж турбины E-klasse (W211)']
];
?>
<header class="header container container__small">
    <div class="row header__block mx-0">
        <div class="col-2 col-lg-12 px-0 mb-lg-4">
            <div class="row header__top mx-0">
                <a class="header__logo col-2 col-md-1 col-xl-3 px-0" href="/">
                    <svg class="logo">
                        <use href="images/sprite.svg#icon-logo"></use>
                    </svg>
                </a>
                <div class="header__list col-9 col-xl-7 mx-0px-0">
                    <div class="px-0">
                        <nav class="header__menu main-nav row mx-0 pl-0 pr-xl-0">
                            <a class="main-nav__link active" href="/">О Компании</a>
                            <a class="main-nav__link" href="#">Политика конфиденциальности</a>
                            <a class="main-nav__link" href="#">Доставка и оплата</a>
                            <a class="main-nav__link" href="#">Гарантия</a>
                        </nav>
                    </div>
                    <div class="dropdown-phones px-0">
                        <div class="dropdown-phones__header row mx-0">
                            <a href="tel:+380680000000">+380680000000</a>
                            <button class="dropdown-phones__toggle button--theme-number button--scale active">
                                <svg class="icon-path icon" width="9" height="6">
                                    <use href="images/sprite.svg#icon-scroll-up"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="dropdown-phones__menu visually-hidden">
                            <a href="tel:+380990000000">+380990000000</a>
                            <a href="tel:+380960000000">+380960000000</a>
                        </div>
                    </div>
                </div>
                <div class="lang col-2 col-xl-2 px-0">
                    <div class="lang-header">
                        <a class="lang-header__link active"
                           href="#">Ua</a>
                        <a class="lang-header__link" href="#">Ru</a>
                    </div>
                    <div class="user">
                        <button class="user__button">
                            <a class="user__text">Войти</a>
                            <svg class="user__icon button--scale" width="20" height="20">
                                <use href="images/sprite.svg#icon-user"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 col-lg-12 px-0">
            <div class="row header__bottom mx-0">
                <div class="col-lg-4 col-xl-3 header-content pl-0">
                    <div class="header-content__header row mx-0">
                        <button class="header-content__catalog" data-catalog-menu-button>
                            <svg class="burger-icon icon" width="26" height="20">
                                <use href="images/sprite.svg#icon-menu-catalog"></use>
                            </svg>
                            <a>каталог</a>
                        </button>
                        <a href="#" class="header-content__categories">Все категории</a>
                    </div>
                    <div class="header-catalog visually-hidden"
                         data-catalog-menu>
                        @foreach( $catalogMenu as $catalogItem)
                            <a href="/{{$catalogItem['link']}}"
                               class="header-catalog__link">
                                <div class="header-catalog__item">
                                    <svg class="header-catalog__icon icon--catalog button--scale" width="34"
                                         height="34">
                                        <use href="images/sprite.svg#icon-{{$catalogItem['icon']}}"></use>
                                    </svg>
                                    {{$catalogItem['text'] }}
                                </div>
                                <svg class="header-catalog__icon icon--path button--scale" width="10" height="16">
                                    <use href="images/sprite.svg#icon-path-catalog-menu"></use>
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>
                <form action="#" class="header-form col-8 col-lg-5 col-xl-7 ">
                    <input class="header-form__input" type="text" name="search"
                           placeholder="Поиск, например “турбина”">
                    <button class="header-form__button" type="button" aria-label="search">
                        <svg class="search" width="18" height="18">
                            <use href="images/sprite.svg#icon-search"></use>
                        </svg>
                    </button>
                </form>
                <div class="col-3 col-lg-3 col-xl-2 header-actions__wishing row row-cols-lg-3 mx-0 mx-lg-0">
                    <button type="button" class="wishing">
                        <svg class="icon" width="30" height="30">
                            <use href="images/sprite.svg#icon-balance"></use>
                        </svg>
                    </button>
                    <button type="button" class="wishing">
                        <svg class="icon" width="30" height="30">
                            <use href="images/sprite.svg#icon-heart"></use>
                        </svg>
                    </button>
                    <button type="button" class="shopping-card" data-shopping-card>
                        <div class="shopping-card__block">
                            <svg class="shopping-card__icon icon" width="30" height="30">
                                <use href="images/sprite.svg#icon-shopping-cart"></use>
                            </svg>
                            <span class="shopping-card__count count">3</span>
                        </div>
                    </button>
                </div>
                <div class="basket-hovering bsk visually-hidden" data-basket-hovering>
                    <div class="basket-hovering__heading">
                        <div>В корзине <span class="accent">3 товара</span></div>
                        <div> На сумму <span class="accent">30 000 ₴</span></div>
                    </div>
                    <a type="button" class="button--basket">Оформить заказ
                        <svg class="icon" width="30" height="30">
                            <use href="images/sprite.svg#icon-shopping-cart"></use>
                        </svg>
                    </a>
                    <a type="button" class="basket-hovering__edit" data-edit-basket>Редактировать заказ</a>
                </div>
            </div>
        </div>
        <button type="button" class="col-1 is-open d-lg-none menu-button align-self-center"
                data-menu-button>
            <svg class="scroll-up__icon icon" width="30" height="30" aria-label="переключение мобильного меню">
                <use class="icon-menu" href='images/sprite.svg#icon-menu'></use>
                <use class="icon-exit" href='images/sprite.svg#icon-exit'></use>
            </svg>
        </button>
    </div>
    <div class="menu-mobile row mx-0" data-menu>
        <div class="menu-mobile__content" data-menu-content>
            <div class="menu-mobile__header">
                <a class="menu-mobile__logo button--scale" href="#">
                    <svg class="logo" width="50" height="31">
                        <use href="images/sprite.svg#icon-logo"></use>
                    </svg>
                </a>
                <div class="menu-mobile__user">
                    <a href="#" class="menu-mobile__icon button--scale">
                        <svg class="icon" width="70" height="70">
                            <use href="images/sprite.svg#icon-user"></use>
                        </svg>
                    </a>
                    <div class="row mx-0">
                        <a class="col-6 position-relative ">Войти</a>
                        <a class="col-6 position-relative ">Регистрация</a>
                    </div>
                </div>
            </div>
            <div class="menu-mobile__body">
                <div class="menu-mobile__list">
                    <button type="button">
                        <svg class="icon" width="30" height="30">
                            <use href="images/sprite.svg#icon-balance"></use>
                        </svg>
                        Сравнить
                    </button>
                    <button type="button">
                        <svg class="icon" width="30" height="30">
                            <use href="images/sprite.svg#icon-heart"></use>
                        </svg>
                        Список желаний
                    </button>
                    <button type="button" class="shopping-card" data-shopping-card>
                        <div class="shopping-card__item">
                            <svg class="shopping-card__icon icon" width="30" height="30">
                                <use href="images/sprite.svg#icon-shopping-cart"></use>
                            </svg>
                            <span class="shopping-card__count count">3</span>
                        </div>
                        Корзина
                    </button>
                    <a href="tel:+380680000000" class="shopping-card__telephone">
                        <svg class="icon" width="30" height="30">
                            <use href="images/sprite.svg#icon-telephone"></use>
                        </svg>
                        +380680000000
                    </a>
                </div>
                <div class="menu-mobile__lang ">
                    <a class="lang-header__link active" href="#">Ua</a>
                    <a class="lang-header__link" href="#">Ru</a>
                </div>
                <nav class="menu-mobile__menu mobile-nav">
                    <a class="menu-mobile__link mobile-nav__link" href="#">О Компании</a>
                    <a class="menu-mobile__link mobile-nav__link" href="#">Политика конфиденциальности</a>
                    <a class="menu-mobile__link mobile-nav__link" href="#">Доставка и оплата</a>
                    <a class="menu-mobile__link mobile-nav__link" href="#">Гарантия</a>
                </nav>
                <div class="menu-mobile__catalog">
                    <div class="menu-mobile__title">Каталог</div>
                    <div class="menu-mobile__turbine">
                        <a href="#" class="menu-mobile__item">Турбины</a>
                        <a href="#" class="menu-mobile__item">Картриджи</a>
                        <a href="#" class="menu-mobile__item">Геометрии</a>
                        <a href="#" class="menu-mobile__item">Актуаторы</a>
                        <a href="#" class="menu-mobile__item">Сервоприводы</a>
                        <a href="#" class="menu-mobile__item">Прокладки</a>
                        <a href="#" class="menu-mobile__item">Прочие запчасти</a>
                        <a href="#" class="menu-mobile__item">Электронновакуумные актуаторы</a>
                        <a href="#" class="menu-mobile__item">Корпуса турбины</a>
                        <a href="#" class="menu-mobile__item">Запчасти для сервопривода</a>
                    </div>
                </div>
                <div class="menu-mobile__customers">
                    <div class="menu-mobile__title">Клиентам</div>
                    <div class="menu-mobile__cash">
                        <a href="#" class="menu-mobile__item">Политика конфиденциальности</a>
                        <a href="#" class="menu-mobile__item">Доставка и оплата</a>
                        <a href="#" class="menu-mobile__item">Способы оплаты</a>
                        <a href="#" class="menu-mobile__item">Гарантия</a>
                        <a href="#" class="menu-mobile__item">Контакты</a>
                    </div>
                </div>
            </div>
            <button type="button" class="menu-mobile__close" data-menu-close data-menu-button>
                <svg class="menu-mobile__icon icon" width="16" height="16" aria-label="переключение мобильного меню">
                    <use href='images/sprite.svg#icon-exit'></use>
                </svg>
            </button>
        </div>
    </div>
</header>
<div class="cookies row flex-md-row mx-0">
    <div class="cookies__text col-12 col-md-9 mb-4 mb-md-0"> Этот сайт использует файлы cookies для более
        комфортной работы пользователя. Продолжая просмотр страниц
        сайта, вы соглашаетесь с использованием файлов cookies. Если вам нужна дополнительная информация или вы
        не
        хотите соглашаться с использованием cookies, пожалуйста, посетите страницу <span class="cookies__info">"Про cookies"</span>
    </div>
    <button class="button button__cookies  col-xxl-1 ">Согласен</button>
</div>
<div>@yield('categories')
    <div class="backdrop is-hidden" data-basket-backdrop>
        <div class="basket" data-basket>
            <div class="basket__title">Корзина</div>
            <button type="button" class="basket__icon button--scale" data-close-basket>
                <svg class="icon" width="15" height="15">
                    <use href="images/sprite.svg#icon-exit"></use>
                </svg>
            </button>
            <div class="basket__body">
                @foreach($basket as $item)
                    <div class="basket__item goods row mx-0">
                        <button type="button"
                                class=" goods__icon icon-menu px-0 button--scale">
                            <svg class="icon" width="15" height="15">
                                <use href="images/sprite.svg#icon-exit"></use>
                            </svg>
                        </button>
                        <picture class="col-3 col-lg-2 goods__picture px-0">
                            <source srcset="{{asset($item['image'])}}">
                            <img loading="lazy" class=" goods__img lozad" data-src="{{asset($item['image'])}}"
                                 alt="{{$item['title']}}" width="120">
                        </picture>
                        <div class="col-8 col-lg-9 px-2 px-lg-0">
                            <div class="row mx-0">
                                <div class="col-12 goods__title px-0">{{$item['title']}}</div>
                                <div class="col-12 goods__block px-0 ">
                                    <div class="goods__left pb-3 pb-lg-0 ">
                                        <div class="goods__price">Стоимость товара: <span class="accent-price">{{$item['price']}} ₴</span>
                                        </div>
                                        <div>
                                            @foreach($item['services'] as $service)
                                                <div class="goods__service">Доп. услуга: <span
                                                        class="accent-service">{{$service}}</span></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="goods__right">
                                        <div class="goods__counter counter">
                                            <button type="button" class="counter__minus button--scale icon-minus">
                                                <svg class="icon" width="15" height="15">
                                                    <use href="images/sprite.svg#icon-minus"></use>
                                                </svg>
                                            </button>
                                            <span class="counter__count">{{$item['count']}}</span>
                                            <button type="button" class="counter__plus button--scale icon-plus">
                                                <svg class="icon" width="15" height="15">
                                                    <use href="images/sprite.svg#icon-plus"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="goods__coast">{{$item['coast']}} ₴</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="basket__total">
                    <div class="text">Итого</div>
                    <div class="price text-right">32 000 ₴</div>
                </div>
            </div>
            <div class="basket__footer row mx-0">
                <a type="button" class="button basket__btn-1 button--basket" data-shopping-continue>Продолжить
                    покупки</a>
                <a type="button" class="button button--basket  basket__btn-2">Оформить заказ
                    <svg class="icon" width="30" height="30">
                        <use href="images/sprite.svg#icon-shopping-cart"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="footer-top container container__medium">
        <div class="row mx-0">
            <div class="footer-top__logo col-12 col-lg-4 col-xxl-3 px-0 pr-lg-3">
                <a class="footer-top__photo button--scale" href="/">
                    <svg class="logo" width="114" height="41">
                        <use href="images/sprite.svg#icon-logo"></use>
                    </svg>
                </a>
                <div class="footer-top__social row mx-0">
                    <a class="social__link col-2 px-0 button--scale"
                       href="https://www.instagram.com/" target="_blank" aria-label="instagram">
                        <svg class="social__icon" width="22" height="22">
                            <use
                                href="images/sprite.svg#icon-instagram"></use>
                        </svg>
                    </a>
                    <a
                        class="social__link col-2 px-0 button--scale"
                        href="https://www.facebook.com/" target="_blank" aria-label="facebook">
                        <svg class="social__icon" width="22" height="22">
                            <use href="images/sprite.svg#icon-facebook"></use>
                        </svg>
                    </a>
                    <a
                        class="social__link col-2 px-0 button--scale"
                        href="https://www.twitter.com/" target="_blank" aria-label="twitter">
                        <svg class="social__icon" width="22" height="22">
                            <use href="images/sprite.svg#icon-twitter"></use>
                        </svg>
                    </a>
                    <a
                        class="social__link col-2 px-0 button--scale"
                        href="https://www.youtube.com/" target="_blank" aria-label="youtube">
                        <svg class="social__icon" width="22" height="22">
                            <use href="images/sprite.svg#icon-youtube"></use>
                        </svg>
                    </a>
                </div>
                <div class="footer-top__payment row mx-0 w-100">
                    <a class="payment-delivery__link" href="#" aria-label="mail">
                        <svg width="83.72" height="30">
                            <use href="images/sprite.svg#icon-mail"></use>
                        </svg>
                    </a>
                    <div
                        class="payment row mx-0">
                        <a class="payment__link" href="#" aria-label="visa">
                            <img loading="lazy" class="lozad" data-src="images/footer/visa.png" alt=""
                                 width="53" height="30"/></a>
                        <a class="payment__link" href="#" aria-label="mastercard">
                            <img loading="lazy"
                                 class="lozad" data-src="images/footer/master-card.png" alt=""
                                 width="53" height="30"/></a>
                        <a class="payment__link" href="#" aria-label="maestro">
                            <img loading="lazy" class="lozad" data-src="images/footer/maestro.png" alt=""
                                 width="53" height="30"/></a>
                        <a class="payment__link" href="#" aria-label="paypal">
                            <img loading="lazy" class="lozad" data-src="images/footer/paypal.png" alt=""
                                 width="53" height="30"/></a>
                    </div>
                </div>
            </div>
            <div class="footer-about col-lg-7 col-xxl-6">
                <div class="row mx-0">
                    <div class="col-12 col-lg-4 px-0">
                        <div class="footer-title">Каталог</div>
                        <div class="footer-about__list">
                            <a href="#" class="footer-about__link ">Ноутбуки</a>
                            <a href="#" class="footer-about__link ">Планшеты</a>
                            <a href="#" class="footer-about__link ">Аксессуары для планшетов и <br> электронных книг</a>
                            <a href="#" class="footer-about__link ">Кабели и переходники</a>
                            <a href="#" class="footer-about__link ">Сумки для ноутбуков</a>
                            <a href="#" class="footer-about__link ">Автотовары</a>
                            <a href="#" class="footer-about__link ">Сантехника</a>
                            <a href="#" class="footer-about__link ">Ремонт</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="footer-title">Клиентам</div>
                        <div class="footer-about__list">
                            <a href="#" class="footer-about__link ">Политика конфиденциальности</a>
                            <a href="#" class="footer-about__link ">Доставка и оплата</a>
                            <a href="#" class="footer-about__link ">Способы оплаты</a>
                            <a href="#" class="footer-about__link ">Гарантия</a>
                            <a href="#" class="footer-about__link ">Контакты</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 hotline px-0">
                        <div class="footer-title">Горячая линия</div>
                        <div class="hotline-list">
                            <a class="hotline-list__link" href="tel:0800000000">0 800 000 000</a>
                            <a class="hotline-list__link" href="tel:+380680000000">+38 068 000 00 00</a>
                            <a class="hotline-list__link" href="tel:+380990000000">+38 099 000 00 00</a>
                            <a class="hotline-list__link" href="tel:+380960000000">+38 096 000 00 00</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-up col-lg-1 px-0">
                <button class="scroll-up__button button--scale">
                    <svg class="scroll-up__icon" width="28" height="15">
                        <use href='images/sprite.svg#icon-scroll-up'></use>
                    </svg>
                </button>
                Вверх
            </div>
        </div>
    </div>
    <div class="footer-bottom container container__medium px-0">
        <div class=" footer-bottom__content row mx-0">
            <p class="footer-bottom__copyright">2021 © Wezom Practice</p>
            <p class="footer-bottom__website">
                Разработка
                <span>\\ Wezom</span>
            </p>
        </div>
    </div>

</footer>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
