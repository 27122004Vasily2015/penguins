<?php
require "connect.php"; //выражение include включает и выполняет указанный файл

$queryProduct = mysqli_query($con, "SELECT * FROM jewelries inner join categories on jewelries.id_categ = categories.id_categ");
$productsAll = mysqli_fetch_all($queryProduct);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="catalog-header">
        <nav class="header__nav" >
            <ul>
                <li class="headre__ul__li_text"><a href="">Контрагентам</a></li>
                <li class="headre__ul__li_text"><a href="">Дизайнерам</a></li>
                <li class="headre__ul__li_text"><a href="">Вакансии</a></li>
                <li class="headre__ul__li_img"><img src="images/logo.png" alt=""></li>
                <li class="headre__ul__li_text"><img src="images/icons/src.png" alt=""><a href="">Поиск</a></li>
                <li class="headre__ul__li_text"><a href="">Вход/Регистрация</a></li>
                <li class="headre__ul__li_text"><a href=""><img src="images/icons/acc.png" alt=""></a></li>
                <li class="headre__ul__li_text"><a href=""><img src="images/icons/like.png" alt=""></a></li>
            </ul>
        </nav>
    </section>

    <section class="list-catalog">
        <form action="" class="catalog__form">
            <select name="brand" id="brand">
                <option value="brand">Бренд </option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
            </select>
    
            <select name="price" id="price">
                <option value="price">Цена </option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
            </select>
    
            <select name="forwho" id="forwho">
                <option value="forwho">Для кого </option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
            </select>
    
            <select name="collection" id="collection">
                <option value="collection">Коллекция  </option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
            </select>
    
            <select name="season" id="season">
                <option value="season">Сезон </option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
            </select>
    
            <select name="ivent" id="ivent">
                <option value="ivent">Событие  </option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
                <option value="Dolce & Gabanna">Dolce & Gabanna</option>
            </select>
        </form>
    </section>

    <section class="prod">

        <div class="products">
            <? foreach ($productsAll as $item):?>
                <div class="product_card">
                    <img src="images/<?=$item[2]?>" alt="">
                    <p><?=$item[7]?></p>
                    <h1><?=$item[5]?></h1>
                    <button class="product_cardbtn"><?=$item[1]?></button>
                </div>
                <?endforeach;?>
            <!-- <div class="product_card">
                <img src="images/product-img.png" alt="">
                <p>Подвеска</p>
                <h1>Dolce & Gabanna</h1>
                <button class="product_card__btn">175 000 ₽</button>
            </div>

            <div class="product_card">
                <img src="images/product-img.png" alt="">
                <p>Подвеска</p>
                <h1>Dolce & Gabanna</h1>
                <button class="product_card__btn">175 000 ₽</button>
            </div>

            <hr>

            <div class="product_card">
                <img src="images/product-img.png" alt="">
                <p>Подвеска</p>
                <h1>Dolce & Gabanna</h1>
                <button class="product_card__btn">175 000 ₽</button>
            </div>

            <div class="product_card">
                <img src="images/product-img.png" alt="">
                <p>Подвеска</p>
                <h1>Dolce & Gabanna</h1>
                <button class="product_card__btn">175 000 ₽</button>
            </div>

            <div class="product_card">
                <img src="images/product-img.png" alt="">
                <p>Подвеска</p>
                <h1>Dolce & Gabanna</h1>
                <button class="product_card__btn">175 000 ₽</button>
            </div> -->

            <button class="catalog__btn">покажите еще</button>
        </div>

        
    </section>

    <section class="delivery">
        <div class="delivery_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, lorem eu commodo porttitor erat. Amet mauris cursus bibendum in egestas. Nulla porttitor amet quam elit, mauris. Tortor egestas dignissim augue suspendisse rutrum pretium lobortis dolor. Commodo sagittis at amet faucibus faucibus id. Bibendum placerat convallis gravida eu quisque et augue. Sed dignissim amet ut vitae at ornare sed.
                Commodo sagittis at amet faucibus faucibus id. Bibendum placerat convallis gravida eu quisque et augue. Sed dignissim amet ut vitae at ornare sed.</p>
        
            <button class="read_more">читать полностью</button>
        
        </div>

        <div class="delivery_icons">
            <div class="delivery_icons_card">
                <img src="images/icons/delivery-icons (1).png" alt="">
                <p>Бесплатная
                    доставка</p>
            </div>

            <div class="delivery_icons_card">
                <img src="images/icons/delivery-icons (4).png" alt="">
                <p>Индивидуальный
                    дизайн</p>
            </div>

            <div class="delivery_icons_card">
                <img src="images/icons/delivery-icons (3).png" alt="">
                <p>Бесплатная
                    примерка</p>
            </div>

            <div class="delivery_icons_card">
                <img src="images/icons/delivery-icons (2).png" alt="">
                <p>Личный
                    подход</p>
            </div>
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
                <li class="contacts"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M17.256 12.253C17.16 11.586 16.645 11.066 15.982 10.911C13.405 10.307 12.759 8.823 12.65 7.177C12.193 7.092 11.38 7 10 7C8.62 7 7.807 7.092 7.35 7.177C7.241 8.823 6.595 10.307 4.018 10.911C3.355 11.067 2.84 11.586 2.744 12.253L2.247 15.695C2.072 16.907 2.962 18 4.2 18H15.8C17.037 18 17.928 16.907 17.753 15.695L17.256 12.253ZM10 15.492C8.605 15.492 7.474 14.372 7.474 12.992C7.474 11.612 8.605 10.492 10 10.492C11.395 10.492 12.526 11.612 12.526 12.992C12.526 14.372 11.394 15.492 10 15.492ZM19.95 6C19.926 4.5 16.108 2.001 10 2C3.891 2.001 0.0729981 4.5 0.0499981 6C0.0269981 7.5 0.0709982 9.452 2.585 9.127C5.526 8.746 5.345 7.719 5.345 6.251C5.345 5.227 7.737 4.98 10 4.98C12.263 4.98 14.654 5.227 14.655 6.251C14.655 7.719 14.474 8.746 17.415 9.127C19.928 9.452 19.973 7.5 19.95 6Z" fill="#333333"/>
                  </svg><a href="">8 (812) 234-56-55</a></li>
                <li class="contacts"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M17.256 12.253C17.16 11.586 16.645 11.066 15.982 10.911C13.405 10.307 12.759 8.823 12.65 7.177C12.193 7.092 11.38 7 10 7C8.62 7 7.807 7.092 7.35 7.177C7.241 8.823 6.595 10.307 4.018 10.911C3.355 11.067 2.84 11.586 2.744 12.253L2.247 15.695C2.072 16.907 2.962 18 4.2 18H15.8C17.037 18 17.928 16.907 17.753 15.695L17.256 12.253ZM10 15.492C8.605 15.492 7.474 14.372 7.474 12.992C7.474 11.612 8.605 10.492 10 10.492C11.395 10.492 12.526 11.612 12.526 12.992C12.526 14.372 11.394 15.492 10 15.492ZM19.95 6C19.926 4.5 16.108 2.001 10 2C3.891 2.001 0.0729981 4.5 0.0499981 6C0.0269981 7.5 0.0709982 9.452 2.585 9.127C5.526 8.746 5.345 7.719 5.345 6.251C5.345 5.227 7.737 4.98 10 4.98C12.263 4.98 14.654 5.227 14.655 6.251C14.655 7.719 14.474 8.746 17.415 9.127C19.928 9.452 19.973 7.5 19.95 6Z" fill="#333333"/>
                  </svg><a href="">8 (812) 234-56-55 </a></li>
                <li class="contacts"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M1.574 5.286L9.074 9.315C9.326 9.45 9.652 9.514 9.98 9.514C10.308 9.514 10.634 9.45 10.886 9.315L18.386 5.286C18.875 5.023 19.337 4 18.44 4H1.521C0.624002 4 1.086 5.023 1.574 5.286ZM18.613 7.489L10.886 11.516C10.546 11.694 10.308 11.715 9.98 11.715C9.652 11.715 9.414 11.694 9.074 11.516C8.734 11.338 1.941 7.777 1.386 7.488C0.996002 7.284 1 7.523 1 7.707V15C1 15.42 1.566 16 2 16H18C18.434 16 19 15.42 19 15V7.708C19 7.524 19.004 7.285 18.613 7.489Z" fill="#333333"/>
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
    
    
</body>
</html>