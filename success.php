<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gratulacje!</title>
    <link rel="stylesheet" href="thx/thx.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
</head>
<body>
<div class="thx">
    <div class="thx__container">
        <div class="thx__box">
            <h2 class="thx-left__title">Gratulujemy udanej rejestracji w systemie.</h2>

            <div class="thx-right">
                <div id="parallax">
                    <div data-depth="0.2" class="thx-right__item-1">
                        <img src="thx/1.png" alt="Congrats item">
                    </div>
                    <div data-depth="0.3" class="thx-right__item-2">
                        <img src="thx/2.png" alt="Congrats item">
                    </div>
                    <div data-depth="0.4" class="thx-right__item-2">
                        <img src="thx/3.png" alt="Congrats item">
                    </div>
                </div>
            </div>
            <div class="thx-left">
                <p style="font-size: 16px;" class="thx-left__text">
                    Otrzymasz telefon w ciągu najbliższych 24 godzin - upewnij się, że go nie przegapisz, <br>w przeciwnym razie inny uczestnik może zająć Twoje miejsce!
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    let scene = document.getElementById('parallax');
    let parallaxInstance = new Parallax(scene);
</script>
<script>
    (function (w, d) {
        w.addEventListener('DOMContentLoaded', function () {

            function getURLParameter(name) {
                return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1] || '');
            }

            let link = getURLParameter('link')
            if (link !== '') {
                setTimeout(() => {
                    window.location.href = link
                }, 2500)
            }
        })
    }(window, document));
</script>
</body>
</html>