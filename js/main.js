const swiper = new Swiper('.swiper', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    breakpoints: {
        // when window width is >= 320px
        769: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 480px
        993: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
})

$(".to-form").on('click', function (event) {
    let anchor = $(this);
    $('html, body').animate({
        scrollTop: $(anchor.data('url')).offset().top - 100
    }, 1000);
    event.preventDefault();
});

let monthNames = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"),
    now = new Date();
now.setTime(now.getTime());
document.querySelector('#date').textContent = now.getDate() + "/" + monthNames[now.getMonth()] + "/" + now.getFullYear()
