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

const popups = $('.popup-link')

if (popups.length > 0) {
    // нашли попап-линки

    for (let index = 0; index < popups.length; index++) {
        const element = popups[index];

        // element.addEventListener('click', function(e) {
        //     alert(1)
        //     e.preventDefault()
        // })

        $(element).click(function(e) {
            $('.popup').addClass('open')
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

    var scrollLeft = $('.stages__items').scrollLeft()
    var scrollValue = scrollLeft - (event.deltaY * event.deltaFactor)
    $('.stages__items').scrollLeft(scrollValue)
    if ((scrollLeft > 0) && (scrollLeft < maxScroll)) {
        event.preventDefault()
    }
});