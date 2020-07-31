$('.header__menu-btn').click(
    () => {
        $('.header__menu-btn').toggleClass('header__menu-btn--close')
        $('.header__menu').toggleClass('nav--show')
    })

$('.faq-title').click(
    function(event) {
        $('.faq-title').not($(this)).removeClass('faq-title--active')
        $('.faq-text').not($(this).next()).slideUp(300)
        $(this).toggleClass('faq-title--active').next().slideToggle(300)
    })

// popup

const popups__feedback = $('.popup__feedback-link')
if (popups__feedback.length > 0) {


    for (let index = 0; index < popups__feedback.length; index++) {
        const element = popups__feedback[index];

        $(element).click(function(e) {
            console.log(1)

            $('.popup__feedback').addClass('open')
            e.preventDefault()
        })
    }
}

const popups__thanks = $('.popup__thanks-link')
if (popups__thanks.length > 0) {
    for (let index = 0; index < popups__thanks.length; index++) {
        const element = popups__thanks[index];

        $(element).click(function(e) {

            // закроем другие попапы
            $('.popup').removeClass('open')

            $('.popup__thanks').addClass('open')
            e.preventDefault()
        })
    }
}


$('.popup__close').click(function(e) {
    $('.popup').removeClass('open')
    e.preventDefault()
})

const maxScroll = 1585 - $(document).width()

$('.stages__items').on('mousewheel', function(event) {

    console.log(1)

    var scrollLeft = $('.stages__items').scrollLeft()
    var scrollValue = scrollLeft - (event.deltaY * event.deltaFactor)
    $('.stages__items').scrollLeft(scrollValue)
    if ((scrollLeft > 0) && (scrollLeft < maxScroll)) {
        event.preventDefault()
    }
});


$(function() {
    $(".phone").mask("+7 (999) 999-99-99");
});