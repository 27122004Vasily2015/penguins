<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header_nav">
            <ul>
                <li><a href="">Контрагентам</a></li>
                <li><a href="">Дизайнерам</a></li>
                <li><a href="">Вакансии</a></li>
                <li><img src="images/icons/logo.svg" alt="" class="logo"></li>
                <li><a href=""><img src="images/icons/oracle.svg" alt="">Поиск</a></li>
                <li><a href="" class="btn"><button class="registr">Вход/Регистрация</button></a></li>
                <li><a href=""><img src="images/icons/human.svg" alt=""></a></li>
                <li><a href=""><img src="images/icons/heart.svg" alt=""></a></li>
            </ul>
        </div>
        <div class="header_info">
            <h1>Долго, дорого, богато!</h1>
            <button><a href="catalog.php">каталог изделий</a></button>
        </div>
        <div class="header_foot">
            <hr>
            <ul>
                <li><img src="images/icons/lotype.png" alt=""></li>
                <hr>
                <li><img src="images/icons/lotype.png" alt=""></li>
                <hr>
                <li><img src="images/icons/lotype.png" alt=""></li>
                <hr>
                <li><img src="images/icons/lotype.png" alt=""></li>
                <hr>
                <li><img src="images/icons/lotype.png" alt=""></li>
                <hr>
            </ul>
        </div>
    </header>

    <main>
        <div class="name">
            <h3>К мероприятиям</h3>
            <h1>Настоящая красота здесь!</h1>
        </div>
        <div class="main_nav">
            <ul>
                <li><a href="">Свадьба</a></li>
                <li><a href="">МУЖУ</a></li>
                <li><a href="">жене</a></li>
                <li><a href="">партнеру</a></li>
                <li><a href="">коллекции</a></li>
                <li><a href="">редкость</a></li>
            </ul>
        </div>
        <div class="cards_align">
            <div class="cards">
                <div class="card">
                    <img src="images/Rectangle 5 (1).png" alt="">
                    <h2>Кольца</h2>
                </div>
                <div class="card">
                    <img src="images/Rectangle 5 (1).png" alt="">
                    <h2>серьги</h2>
                </div>
                <div class="card">
                    <img src="images/Rectangle 5 (1).png" alt="">
                    <h2>подвески</h2>
                </div>
                <div class="card">
                    <img src="images/Rectangle 5 (1).png" alt="">
                    <h2>запонки</h2>
                </div>
                <div class="card">
                    <img src="images/Rectangle 5 (1).png" alt="">
                    <h2>браслеты</h2>
                </div>
                <div class="card">
                    <img src="images/Rectangle 5 (1).png" alt="">
                    <h2>часы</h2>
                </div>
            </div>
        </div>
    </main>
    <div class="our-salons">
        <div class="our-salons__text">
            <h2>Не знаете, что выбрать?</h2>
            <h1>Посетите наши салоны в Москве</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut duis tortor vitae pellentesque egestas quam
                pulvinar. Pellentesque porttitor velit sit pellentesque. Suspendisse donec pretium id dignissim.
                Dignissim ultrices eget orci viverra. Egestas quis et ut ultrices imperdiet lectus nulla tempus.
                Pharetra lorem sem purus nisi libero viverra ipsum.</p>

            <button class="our-salons__text_btn">наши салоны</button>
        </div>
    </div>

    <div class="our-blog">
        <div class="catalog__text">
            <h2>Полезные статьи</h2>
            <h1>Лучшие советы по подбору дорогих подарков</h1>
        </div>

        <div class="catalog__category">
            <div class="blog__card blog-card1">
                <h1>Как выбрать
                    часы для своей
                    будущей жены</h1>
            </div>

            <div class="blog__card blog-card2">
                <h1>Запонки для мужа:
                    7 ключевых правил
                    покупки аксессуара</h1>
            </div>

            <div class="blog__card blog-card3">
                <h1>Как выбрать
                    обручальные кольца
                    молодоженам</h1>
            </div>
        </div>

        <button class="blog__btn">наши салоны</button>
    </div>

    <section class="our-social">
        <div class="catalog__text">
            <h2>#ojjo_jewerly</h2>
            <h1>Мы в социальных сетях</h1>
        </div>

        <div class="social__images">
            <div class="social_video"><img src="images/play.png" alt=""></div>
            <div class="social_img1"></div>
            <div class="social_img2"></div>
            <div class="social_img3"></div>
            <div class="social_img4"></div>
            <div class="social_video2"><img src="images/play.png" alt=""></div>
        </div>
    </section>

    <section class="mailing">
        <div class="mailing__text">
            <h2>Полезные советы и персональный предложения</h2>
            <h1>Эксклюзивная рассылка</h1>
        </div>

        <div class="mailing__form">
            <ul class="mailing__form__ul">
                <li>Личный менеджер</li>
                <li>Доставка и оформление</li>
                <li>Индивидуальный дизайн</li>
            </ul>

            <form action="">
                <div class="in-block">
                    <input type="email" placeholder="Ваш e-mail">
                    <button class="form__btn">отправить</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="urls">
            <h1 class="footer__h1">Полезные ссылки</h1>
            <hr>

            <ul class="urls__ul">
                <li><a href="">Доставка</a></li>
                <li><a href="">Оплата </a></li>
                <li><a href="">Акции</a></li>
                <li><a href="">Политика конфиденциальности</a></li>
            </ul>
        </div>

        <div class="urls">
            <h1 class="footer__h1">оплата</h1>
            <hr>

            <div class="pay__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper justo, nec, pellentesque.</p>
                <div class="pay__img">
                    <img src="images/f-visa.png" alt="">
                    <img src="images/f-mc.png" alt="">
                </div>

            </div>
        </div>

        <div class="urls">
            <h1 class="footer__h1">контакты</h1>
            <hr>

            <ul class="urls__ul">
                <li class="contacts"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M17.256 12.253C17.16 11.586 16.645 11.066 15.982 10.911C13.405 10.307 12.759 8.823 12.65 7.177C12.193 7.092 11.38 7 10 7C8.62 7 7.807 7.092 7.35 7.177C7.241 8.823 6.595 10.307 4.018 10.911C3.355 11.067 2.84 11.586 2.744 12.253L2.247 15.695C2.072 16.907 2.962 18 4.2 18H15.8C17.037 18 17.928 16.907 17.753 15.695L17.256 12.253ZM10 15.492C8.605 15.492 7.474 14.372 7.474 12.992C7.474 11.612 8.605 10.492 10 10.492C11.395 10.492 12.526 11.612 12.526 12.992C12.526 14.372 11.394 15.492 10 15.492ZM19.95 6C19.926 4.5 16.108 2.001 10 2C3.891 2.001 0.0729981 4.5 0.0499981 6C0.0269981 7.5 0.0709982 9.452 2.585 9.127C5.526 8.746 5.345 7.719 5.345 6.251C5.345 5.227 7.737 4.98 10 4.98C12.263 4.98 14.654 5.227 14.655 6.251C14.655 7.719 14.474 8.746 17.415 9.127C19.928 9.452 19.973 7.5 19.95 6Z"
                            fill="#333333" />
                    </svg><a href="">8 (812) 234-56-55</a></li>
                <li class="contacts"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M17.256 12.253C17.16 11.586 16.645 11.066 15.982 10.911C13.405 10.307 12.759 8.823 12.65 7.177C12.193 7.092 11.38 7 10 7C8.62 7 7.807 7.092 7.35 7.177C7.241 8.823 6.595 10.307 4.018 10.911C3.355 11.067 2.84 11.586 2.744 12.253L2.247 15.695C2.072 16.907 2.962 18 4.2 18H15.8C17.037 18 17.928 16.907 17.753 15.695L17.256 12.253ZM10 15.492C8.605 15.492 7.474 14.372 7.474 12.992C7.474 11.612 8.605 10.492 10 10.492C11.395 10.492 12.526 11.612 12.526 12.992C12.526 14.372 11.394 15.492 10 15.492ZM19.95 6C19.926 4.5 16.108 2.001 10 2C3.891 2.001 0.0729981 4.5 0.0499981 6C0.0269981 7.5 0.0709982 9.452 2.585 9.127C5.526 8.746 5.345 7.719 5.345 6.251C5.345 5.227 7.737 4.98 10 4.98C12.263 4.98 14.654 5.227 14.655 6.251C14.655 7.719 14.474 8.746 17.415 9.127C19.928 9.452 19.973 7.5 19.95 6Z"
                            fill="#333333" />
                    </svg><a href="">8 (812) 234-56-55 </a></li>
                <li class="contacts"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M1.574 5.286L9.074 9.315C9.326 9.45 9.652 9.514 9.98 9.514C10.308 9.514 10.634 9.45 10.886 9.315L18.386 5.286C18.875 5.023 19.337 4 18.44 4H1.521C0.624002 4 1.086 5.023 1.574 5.286ZM18.613 7.489L10.886 11.516C10.546 11.694 10.308 11.715 9.98 11.715C9.652 11.715 9.414 11.694 9.074 11.516C8.734 11.338 1.941 7.777 1.386 7.488C0.996002 7.284 1 7.523 1 7.707V15C1 15.42 1.566 16 2 16H18C18.434 16 19 15.42 19 15V7.708C19 7.524 19.004 7.285 18.613 7.489Z"
                            fill="#333333" />
                    </svg><a href="">ojjo@ojjo.ru</a></li>
            </ul>
        </div>

        <div class="urls">
            <h1 class="footer__h1">социальные сети</h1>
            <hr>

            <div class="pay__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper justo, nec, pellentesque.</p>
                <div class="pay__img">
                    <img src="images/icons/ft-icons (5).png" alt="">
                    <img src="images/icons/ft-icons (4).png" alt="">
                    <img src="images/icons/ft-icons (3).png" alt="">
                    <img src="images/icons/ft-icons (2).png" alt="">
                    <img src="images/icons/ft-icons (1).png" alt="">


                </div>

            </div>
        </div>


    </footer>

    <div class="footer-info">
        <ul>
            <li>(c) 2020 OJJO jewelry</li>
            <li>Договор публичной офферты</li>
            <li>Контрагентам</li>
            <li>Сделано Figma.info</li>
        </ul>
    </div>

 <!-- модальное окно -->
    <div class="modal_main">
        <div class="modal_main_left">
       
            <div class="modal_main_left_body">
                <form action="" class="form_modal">
                    <div class="form__btn__modal">
                        <input type="email" placeholder="Ваш e-mail">

                    </div>
                </form>
                <form action="" class="form_modal">
                    <div class="form__btn__modal">
                        <input type="email" placeholder="Ваше имя">
                    </div>
                </form>
                <form action="" class="form_modal">
                    <div class="form__btn__modal">
                        <input type="number" placeholder="Ваш номер">
                    </div>
                </form>
                <button>отправить</button>
            </div>
        </div>
        <div class="modal_main_right">
            <div class="modal_main_right_border">
                <button class="close">X</button>
                <div class="modal_main_right_img"><img src="images/vivienn.png" alt=""></div>
            </div>
        </div>

    </div>

    <script src="jquery-3.7.1.js"></script>
    <script src="script.js"></script>
</body>
</html>
