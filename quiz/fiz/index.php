<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Пройдите опросник и заполните форму чтобы мы смогли вам помочь. Дайте ответ на несколько вопросов и мы с вами свяжемся.">
    <title>Форма заполнения онлайн заявки на банкротство физического лица</title>
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/quiz.css">

</head>

<body class="noscroll-x">

    <header class="header">
        <div class="header__container">

            <div class="logo">
                <a class="logo__link" href="../../">
                    Bankrotam.net
                </a>
                <p class="logo__subtitle">
                    Всё о банкротстве физических и&nbsp;юридических лиц
                </p>
            </div>

            <hr class="menu-line">

            <div class="header__menu-wrapper">
                <button class="header__menu-btn"></button>
                <a class="header__menu--logo-link" href="">
                    <img class="header__menu--logo" src="../../images/logo.svg" />
                    Bankrotam.net
                </a>    
            </div>
            <div class="phone-and-whatapp">
                <a class="icon-phone" href="tel:+74951288974"></a>
                <a class="icon-whatsapp" href="https://api.whatsapp.com/send?phone=79774222116"></a>
            </div>

            <nav class="header__menu">
                <ul class="menu__items">
                    <li class="menu__item main--link">
                        <a class="menu__link" href="../../">Главная</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="../../fiz/">Физическим лицам</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="../../ur/">Юридических лицам</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="../../faq/">Вопрос-ответ</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="../../otzyvy/">Отзывы клиентов</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="../../kontakty/">Контакты</a>
                    </li>
                </ul>

                <a class="header__phone" href="tel:+74951288974">+7 495 128 89 74</a>

                <a class="header__mail" href="mailto:info@bankrotam.net">info@bankrotam.net</a>

                <a class="btn bg--blue btn__header" href="">Оставить заявку</a>
            </nav>
            <div class="header__social">

                <div class="header__social-wrapper">
                    <a class="header__social-phone" href="tel:+74951288974">+7 495 128 89 74</a>

                    <a class="header__social-mail" href="mailto:info@bankrotam.net">info@bankrotam.net</a>
                </div>

                <a class="btn bg--blue header__social-btn" href="">Оставить заявку</a>

                <ul class="social__list">
                    <li class="social__item">
                        <a class="social__link" href="https://api.whatsapp.com/send?phone=79774222116">
                            <img src="../../images/whatsapp.svg" alt="whatapp">
                        </a>
                    </li>
                    <li class="social__item">
                        <a class="social__link" href="tg://resolve?domain=bankrotamNET">
                            <img src="../../images/telegram.svg" alt="telegram">
                        </a>
                    </li>
                    <li class="social__item menu-devider">
                    </li>
                    <li class="social__item">
                        <a class="social__link" href="">
                            <img src="../../images/instagram.svg" alt="instagram">
                        </a>
                    </li>
                    <li class="social__item">
                        <a class="social__link" href="">
                            <img src="../../images/vk.svg" alt="vk">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="main">

        <div class="intro intro--quiz">

            <div class="intro__wrapper--etc intro__wrapper--quiz">
                <div class="intro__block">
                    <h1 class="intro__title intro__title--quiz">
                        Опросник на банкроство
                    </h1>
                    <p class="intro__subtitle intro__subtitle--quiz">
                        Пройдите опросник до конца
                    </p>
                </div>
                <div class="intro__btns-quiz">
                    <p class="btn btn--intro btn--quiz bg--yellow">Для физ. лиц</p>
                    <a class="btn btn--intro btn--quiz bg--transparent" href="../ur/">Для юр. лиц</a>
                </div>
            </div>

        </div>

        <div class="quiz" id="quiz">

            <div class="quiz__wrapper">
                <div class="quiz__progressbar bg--light">
                    <div class="quiz__progressbar-line" style="grid-template-columns: repeat(99, 1fr);">
                        <div class="quiz__progressbar-process" style="grid-column: 1 / 99 ;"></div>
                    </div>
                    <div class="quiz__progressbar-ready">Готово: <span class="quiz__progressbar-percent">3%</span></div>
                    <div class="quiz__progressbar-count">Вопрос ? из ?</div>
                </div>

                <div class="quiz__qa">
                    
                        <?php 
                            require_once("questions.php");
                        ?>

                        <div class="quiz__form-block">
                            <button class="btn bg--blue quiz__form-btn-next" id="btn-quiz-fiz">Перейти к следующему вопросу</button>
                            <a class="back" href="/">Вернуться на главную</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>


    </main>

    <footer class="footer">

        <div class="footer__wrapper">
            <div class="footer__header">
                <a class="footer__logo-link" href="../../">
                    Банкротство в Москве</a>
                <div class="footer__title">
                    Банкротство лиц. Ликвидация организаций. Арбитражный управляющий
                </div>

                <a class="btn bg--blue footer__btn" href="/">Оставить заявку</a>
            </div>

            <div class="submenu">
                <ul class="submenu__one">
                    <li class="submenu--item">
                        <a class="submenu--link" href="../../fiz/">Физическим лицам</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--sublink" href="../../fiz/zakon/">Закон о банкротстве</a>
                    </li>
                    <li class=" submenu--item">
                        <a class="submenu--sublink" href="../../fiz/procedura/">Процедура банкротства</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--sublink" href="../../fiz/posledstviya/">Последствия банкротства</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--sublink" href="../../fiz/cena/">Цена банкротства</a>
                    </li>
                </ul>
                <ul class="submenu__two">
                    <li class="submenu--item">
                        <a class="submenu--link" href="../../ur/">Юридическим лицам</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--sublink" href="../../ur/zakon/">Закон о банкротстве</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--sublink" href="../../ur/procedura/">Процедура банкротства</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--sublink" href="../../ur/posledstviya/">Последствия банкротства</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--sublink" href="../../ur/cena/">Цена банкротства</a>
                    </li>
                </ul>
            </div>

            <div class="submenu--mini">
                <ul class="submenu__items">
                    <li class="submenu--item">
                        <a class="submenu--link" href="../../faq/">FAQ</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--link" href="../../otzyvy/">Отзывы</a>
                    </li>
                    <li class="submenu--item">
                        <a class="submenu--link" href="../../kontakty/">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <div class="copy">
                2020 Москва. Банкротство юридических и физических лиц
            </div>
            <a class="madein" href="https://dublingroup.ru">
                Разработано в студии <span class="dublin-group">Dublin Group</span>
            </a>
        </div>

    </footer>

    <div id="popup__thanks" class="popup__thanks popup">
        <div class="popup__body">
            <div class="popup__content">
                <a class="popup__close" href=""></a>
                <h2 class="popup__title">Благодарим за прохождение теста!</h2>
                <p class="popup__subtitle">Мы свяжемся с вами в ближайшее время, ожидайте звонка юриста.</p>
            </div>
        </div>
    </div>

    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/main.js"></script>

    <script>
        (function(d, w, c) {
            w.ChatraID = 'q3wTXqiATrktqgxFD';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = 'https://call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
        ym(63276445, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/63276445" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167992083-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'UA-167992083-1');
    </script>
    <!-- /Google Analytics -->
        
</body>

</html>