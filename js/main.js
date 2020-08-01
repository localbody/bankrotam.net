$(".form__btn").click(
    function(e) {

        e.preventDefault()
        // console.log( $(this).parent().find(".form__name").val() )
        const name = $(this).parent().find(".form__name").val()
        const phone = $(this).parent().find(".phone").val()
        const summa = $(this).parent().find(".summa").val()
        const text = $(this).parent().find(".form__textarea").val()
        

        $.post(
            "../feedback.php",
            {
                name,
                phone,
                summa,
                text
            },
            onAjaxSuccess
          );
           
          function onAjaxSuccess(data)
          {
            // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
            // console.log(data)
            $("body").toggleClass("noscroll")
            $(".popup__thanks").addClass("open")
          }

    }
)

$(".header__menu-btn").click(() => {
    $(".header__menu-btn").toggleClass("header__menu-btn--close")
    $(".header__menu").toggleClass("nav--show")
    $("body").toggleClass("noscroll")
})

$(".faq-title").click(function (event) {
    $(".faq-title").not($(this)).removeClass("faq-title--active")
    $(".faq-text").not($(this).next()).slideUp(300)
    $(this).toggleClass("faq-title--active").next().slideToggle(300)
})

// popup

const popups__feedback = $(".popup__feedback-link")
if (popups__feedback.length > 0) {
    for (let index = 0; index < popups__feedback.length; index++) {
        const element = popups__feedback[index];

        $(element).click(function (e) {
            $(".popup__feedback").addClass("open")
            $("body").toggleClass("noscroll")
            e.preventDefault()
        })
    }
}

const popups__thanks = $(".popup__thanks-link")
if (popups__thanks.length > 0) {
    for (let index = 0; index < popups__thanks.length; index++) {
        const element = popups__thanks[index];

        $(element).click(function (e) {
            // закроем другие попапы
            $(".popup").removeClass("open")
            $(".popup__thanks").addClass("open")
            e.preventDefault()
        })
    }
}

$(".popup__close").click(function (e) {
    $(".popup").removeClass("open")
    $("body").toggleClass("noscroll")
    e.preventDefault()
})

const maxScroll = 1585 - $(document).width()

$(".stages__items").on("mousewheel", function (event) {
    console.log(1)

    var scrollLeft = $(".stages__items").scrollLeft()
    var scrollValue = scrollLeft - event.deltaY * event.deltaFactor;
    $(".stages__items").scrollLeft(scrollValue)
    if (scrollLeft > 0 && scrollLeft < maxScroll) {
        event.preventDefault()
    }
})

const question = $("#question").val() - 1
const questions = $("#questions").val()
const ready = Math.round((99 / questions) * question)

$(".quiz__progressbar-count").html("Вопрос " + question + " из " + questions)
$(".quiz__progressbar-percent").html(ready + "%")
$(".quiz__progressbar-process").attr(
    "style",
    "grid-column: 1 / " + ready + " ;"
)

if (question == questions) 
{
    $(".quiz__form-btn-next").html("Завершить опрос")
}

const href = document.location.href
const anchor = href.substr(href.lastIndexOf('?') + 1, 8)

// console.log(href, anchor)

if (anchor == "question") {
    $('html').animate({ scrollTop: $(".quiz").offset().top - 140 }, 300);
}