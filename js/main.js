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