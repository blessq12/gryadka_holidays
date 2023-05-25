<?php 
include 'data.php';
$ver='1.4';
?>
<!DOCTYPE html>
<html lang="RU-ru">
    <head>
        <meta name="robots" content="noindex, nofolow">
        <title>Каникулы в Грядка Сити</title>
        <meta name="description" content="description">
        <meta name="author" content="Andrew Korobkov (http://code-me.ru)">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="keywords" content="">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css?ver=<?=$ver?>">
        <script>
        function scrollContact(){
            let sections = document.getElementsByTagName('section')
            let section = sections[sections.length-1]
            section.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
        })
    }
        </script>
    </head>
    <body>
    <!-- hero banner section -->
    <div class="hero-wrapper">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-8">
                    <h1>Каникулы в Грядка Сити</h1>
                    <h2>Запишитесь в городской лагерь детского города профессий</h2>
                    <h4>Группы каждую неделю:</h4>
                    <div class="months">
                        <div class="item">Июнь</div>
                        <div class="item">Июль</div>
                        <div class="item">Август</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center text-center py-4">
                        <a href="" class="cta-btn">Записаться</a>
                        <a href="javascript:void(0)" class="cta-btn secondary" onclick="scrollContact()">Контакты</a>
                    </div>
                    <div class="scroll-down">
                        <object data="assets/images/svg/arrow-down.svg" type=""></object>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- for whom section -->
    <section>
        <div class="school-bag">
            <img src="assets/images/school_bag.png" alt="">
        </div>
        <div class="ticker-wrap">
                <ul class="ticker">
                    <li>Сильное окружение</li>
                    <li>Своё мнение</li>
                    <li>Будущие предприниматели</li>
                    <li>Творчество</li>
                    <li>Креативность</li>
                    <li>Своё мышление</li>
                </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h2>Почему выбирают «Грядка Сити»?</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                        <div class="wh-item">
                            <div class="icon">
                                <object data="assets/images/svg/cash.svg" type=""></object>
                            </div>
                            <p>Дети любят <b>зарабатывать и тратить</b> валюту города</p>
                        </div>
                    </div>
                <div class="col-12 col-md-4 col-lg-4">
                        <div class="wh-item">
                            <div class="icon">
                                <object data="assets/images/svg/time.svg" type=""></object>
                            </div>
                            <p>Организация каникул <b>с 2020 года</b></p>
                        </div>
                    </div>
                <div class="col-12 col-md-4 col-lg-4">
                        <div class="wh-item">
                            <div class="icon">
                                <object data="assets/images/svg/qty.svg" type=""></object>
                            </div>
                            <p><b>Более 1000</b> отдохнувших детей</p>
                        </div>
                    </div>
                <div class="col-12 col-md-4 col-lg-4">
                        <div class="wh-item">
                            <div class="icon">
                                <object data="assets/images/svg/win.svg" type=""></object>
                            </div>
                            <p>Ваш ребенок <b>стремится к новым победам</b> по системе мотивации и роста граждан</p>
                        </div>
                    </div>
                <div class="col-12 col-md-4 col-lg-4">
                        <div class="wh-item">
                            <div class="icon">
                                <object data="assets/images/svg/repeat.svg" type=""></object>
                            </div>
                            <p>Грядку посещает <b>7 из 10 детей повторно</b>, потому что всегда новая программа</p> 
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                    <div class="d-flex justify-content-center align-items-center text-center py-4">
                        <a href="" class="cta-btn">Записаться</a>
                    </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- professions -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h2>Лето 2023 в грядка сити</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="cta-section">
                        <h2>Этим летом мы подготовили новые профессии для школьников и дошкольников</h2>
                        <p>
                            Ваш ребенок прокачает навыки soft skills(жизненные навыки): коммуникации, лидерство, публичное выступление, работа в команте, креативное и творческое мышление, решение конфликтных ситуаций, управление своими эмоциями и желание учиться на протяжении всей жизни
                        </p>
                        <h4>
                            Для ребят от 8 лет каждую неделю проходят курсы по социальному проектированию "От идеи к делу"
                        </h4>
                    </div>
                    <div class="d-flex justify-content-start align-items-center text-center py-4">
                        <a href="" class="cta-btn">Записаться</a>
                        <a href="javascript:void(0)" class="cta-btn secondary" onclick="scrollContact()">Контакты</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="photo-gallery">
                        <div class="overlay-gallery"></div>
                        <div class="gallery">
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/1.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/2.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/3.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/4.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/5.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/6.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/7.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/8.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/9.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/10.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/11.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/12.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/13.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/14.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/15.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/16.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/17.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/18.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/19.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/20.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/21.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/22.jpeg');"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="image" style="background: url('assets/images/gallery/23.jpeg');"></div>
                                <div class="image" style="background: url('assets/images/gallery/24.jpeg');"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- price section -->
    <section>
        <div class="ticker--wrap">
            <div class="ticker--item">
                <p>Выбирай лучшее для себя и своих близких по лучшим предложеням от Грядка сити</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h2>Стоимость</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row price-row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="price-container">
                        <div class="header">
                            <div class="price-badge">12.000 руб</div>
                            <h3>5 дней каникул</h3>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Дети зарабатывают деньги и тратят</li>
                                <li>Обучаются разным профессиям</li>
                                <li>
                                    <p class="m-0">Открываем двери в 8:00 
                                        <span class="text-muted d-block" style="font-size:10px">программа начинается в 9:00 до 17:00</span>
                                    </p>
                                </li>
                                <li>Дети заказывают еду себе сами из предложенного меню</li>
                                <li>Выездные мероприятия, кино, игровые лабиринты и выезд на производство в пиццерию.</li>
                                <li>Прогулки с интенсивными играми</li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="" class="price-cta">Записать ребенка</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="price-container">
                        <div class="header">
                            <div class="price-badge">22.000 руб</div>
                            <h3>10 дней каникул</h3>
                        </div>
                        <div class="content">
                            <ul>
                                <li>Дети зарабатывают деньги и тратят</li>
                                <li>Обучаются разным профессиям</li>
                                <li>
                                    <p class="m-0">Открываем двери в 8:00 
                                        <span class="text-muted d-block" style="font-size:10px">программа начинается в 9:00 до 17:00</span>
                                    </p>
                                </li>
                                <li>Дети заказывают еду себе сами из предложенного меню</li>
                                <li>Выездные мероприятия, кино, игровые лабиринты и выезд на производство в пиццерию.</li>
                                <li>Прогулки с интенсивными играми</li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="" class="price-cta">Записать ребенка</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section -->
    <section>
        <div class="glitter">
            <img src="assets/images/glitter.png" width="100%" alt="">
        </div>
        <div class="building">
            <img src="assets/images/magazine_620x480.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h2>Контакты</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <ul class="contact-list">
                        <li><span>Адрес:</span>г. Томск. ул. Б. Подгорная 87</li>
                        <li><span>Телефон:</span> <a href="tel:+7(3822)97-99-25">+7(3822)97-99-25</a></li>
                        <li><span>Мессенджеры:</span>
                            <ul class="social-list">
                                <a href="<?=$vkLink?>" target="_blank" rel="nofollow">
                                    <li class="vk">
                                        <span></span>
                                        <object data="assets/images/svg/vk.svg" type=""></object>
                                    </li>
                                </a>
                                <a href="<?=$waLink?>" target="_blank" rel="nofollow">
                                    <li class="wa">
                                        <span></span>
                                        <object data="assets/images/svg/wa.svg" type=""></object>
                                    </li>
                                </a>
                                <a href="<?=$tgLink?>" target="_blank" rel="nofollow">
                                    <li class="tg">
                                        <span></span>
                                        <object data="assets/images/svg/telegram.svg" type=""></object>
                                    </li>
                                </a>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="map-wrapper">
                        <img src="assets/images/gryadka-map.jpg" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <p class="text-center text-md-start m-0">Грядка Сити © <?= date('Y') ?> Все права защищены</p>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <p class="text-center text-md-end m-0">Разработано <a href="http://code-me.ru" class="text-uppercase text-white">code-me</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/app.js?ver=<?=$ver?>"></script>
    </body>
</html>