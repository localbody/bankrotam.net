<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/quiz.css">

</head>

<body>

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
            <button class="header__menu-btn">Меню</button>
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

                <a class="btn bg--blue btn__header" href="/">Оставить заявку</a>
            </nav>
            <div class="header__social">

                <div class="header__social-wrapper">
                    <a class="header__social-phone" href="tel:+74951288974">+7 495 128 89 74</a>

                    <a class="header__social-mail" href="mailto:info@bankrotam.net">info@bankrotam.net</a>
                </div>

                <a class="btn bg--blue header__social-btn" href="/">Оставить заявку</a>

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
                        Подходит мне банкроство?
                    </h1>
                    <p class="intro__subtitle intro__subtitle--quiz">
                        Онлайн для юридических лиц
                    </p>
                </div>
                <div class="intro__btns-quiz">
                    <a class="btn btn--intro btn--quiz bg--transparent" href="../../quiz/fiz/">Для физ. лиц</a>
                    <a class="btn btn--intro btn--quiz bg--yellow" href="../../quiz/ur/">Для юр. лиц</a>
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
                            <button class="btn bg--blue quiz__form-btn-next">Перейти к следующему вопросу</button>
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
                <ul>
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
                <ul>
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

    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>