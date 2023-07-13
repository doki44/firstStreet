<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая улица</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

</head>
<body>
    <section class="about">
        <header class="header">
            <div class="container container__header">
                <div class="header__inner">
                    <a href="/" class="header__logo">Первая улица</a>
                    <nav class="header__menu">
                        <ul class="header__menu-list">
                            <li class="header__menu-li">
                                <a class="header__link" href="#">О нас</a>
                            </li>
                            <li class="header__menu-li">
                                <a class="header__link" href="#">Наши преимущетсва</a>
                            </li>
                            <li class="header__menu-li">
                                <a class="header__link" href="#">С кем мы работаем</a>
                            </li>
                            <li class="header__menu-li">
                                <a class="header__link" href="#">Отзывы</a>
                            </li>
                            <li class="header__menu-li">
                                <a class="header__link" href="#">Обратная связь</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__profile">
                        <a class="header__link" href="chat/login.php">Войти</a>
                        <a class="header__link" href="chat/reg.php">Регистрация</a>
                    </div>
                    <div class="header__burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="about__inner">
                <div class="about__descr">
                    <p class="about__title title">Ключ к изысканной доставке</p>
                    <p class="about__text">Бережно доставим заказ в короткие сроки.</p>
                    <a class="btn" href="#">Стать нашим партнером</a>
                </div>
                <div class="about__img">
                    <img src="./images/header-img.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <div class="advantages__inner">
                <div class="advantages__img">
                    <img src="./images/about.png" alt="">
                </div>
                <div class="advantages__descr">
                    <p class="advantages__title title">О нас</p>
                    <p class="advantages__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis magnam, sed unde placeat expedita vel ullam incidunt cum minima quasi quos, iste sint. Amet, atque! Nisi dolore voluptatum dolorum beatae.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="partners__inner">
                <p class="partners__title title">С кем мы работаем</p>
            </div>
        </div>
        <div class="partners__grid">
            <img src="./images/altavina.png" alt="">
            <img src="./images/coffecake.png" alt="">
            <img src="./images/bakladjan.png" alt="">
            <img src="./images/dadi.png" alt="">
            <img src="./images/bazar.png" alt="">
            <img src="./images/dodici.png" alt="">
            <img src="./images/dodici_wines.png" alt="">
            <img src="./images/dodici_grill.png" alt="">
            <img src="./images/fukuramen.png" alt="">
            <img src="./images/dodici_italy.png" alt="">
            <img src="./images/myasoroob.png" alt="">
            <img src="./images/dodici_seafood.png" alt="">
            <img src="./images/jamel.png" alt="">
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="reviews__inner">
                <p class="reviews__title title">Отзывы</p>
                <div class="reviews__items">
                    <div class="reviews__item">
                    <div class="reviews__item-img">
                        <img src="./images/reviews1.png" alt="">
                    </div>
                    <div class="reviews__item-descr">
                        <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <p class="reviews__item-name">Wade Warren</p>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-img">
                        <img src="./images/reviews2.png" alt="">
                    </div>
                    <div class="reviews__item-descr">
                        <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <p class="reviews__item-name">Jane Cooper</p>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-img">
                        <img src="./images/reviews3.png" alt="">
                    </div>
                    <div class="reviews__item-descr">
                        <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <p class="reviews__item-name">Robert Fox</p>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="reviews__item-img">
                        <img src="./images/reviews4.png" alt="">
                    </div>
                    <div class="reviews__item-descr">
                        <p class="reviews__item-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <p class="reviews__item-name">Brooklyn Simmons</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback">
        <div class="container">
            <div class="feedback__inner">
                <p class="feedback__title title">Обратная связь</p>
                <form action="#" class="feedback__form">
                    <p class="feedback__form-title">Стать партнером в один миг!
                        <span>Только напишите нам письмо.</span>
                    </p>
                    <div class="feedback__form-field">
                        <label class="feedback__form-label">E-Mail</label>
                        <input class="feedback__form-input" type="text">
                    </div>
                    <div class="feedback__form-field">
                        <label class="feedback__form-label">Конт. данные</label>
                        <input class="feedback__form-input" type="text">
                    </div>
                    <div class="feedback__form-field textarea">
                        <label class="feedback__form-label">Сообщение</label>
                        <textarea class="feedback__form-textarea" type="text"></textarea>
                    </div>
                    <div class="feedback__form-field">
                        <input class="feedback__form-btn btn" type="submit" value="Отправить">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer"></footer>

    <script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src = "js/main.js"></script>
</body>
</html>