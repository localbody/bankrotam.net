var formValid = false
var isFirstQuestion = false
var isLastQuestion = false
var arrQuestions = []
var arrAnswers = []

$(window).resize(function(){
    $("body").css("max-width", $("html").width())
})


function showError( title , subtitle  ) {
    const popup__error = $(".popup__error")

    // console.log(popup__error)

    popup__error.find(".popup__title").html(title)
    popup__error.find(".popup__subtitle").html(subtitle)
    popup__error.addClass("open")
}

function isValidMail(email) {
    const re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i
    const valid = re.test(email)
    return valid
}

function idValidPhone(phone) {
    var re = /^\+[7]\d[\d\(\)\ -]{4,14}\d$/
    var valid = re.test(phone)
    return valid
}  

function idValidName(name) {
    var re = /^[А-Яа-яЁё\s]+$/
    var valid = re.test(name)
    return valid
}  

function idValidSumma(summa) {
    var re = /[0-9]{5,15}/
    var valid = re.test(summa)
    return valid
}  


$(".form__btn").click(
    function(e) {

        e.preventDefault()
        // console.log( $(this).parent().find(".form__name").val() )
        const email = $(this).parent().find(".form__email").val()
        const name  = $(this).parent().find(".form__name").val()
        const phone = $(this).parent().find(".phone").val()
        const summa = $(this).parent().find(".summa").val()
        const text  = $(this).parent().find(".form__textarea").val()
        
        let errorMessage = ""

        if (typeof email != "undefined") {
            // проверим email
            if ( !isValidMail(email) ) {
                errorMessage = errorMessage + "- поле E-mail<br>"
            }
        } 
        if(typeof name != "undefined") {
            // проверим имя
            if ( !idValidName(name) ) {
                errorMessage = errorMessage + "- поле Имя<br>"
            }
        } 
        if(typeof phone != "undefined") {
            // проверим тел
            if ( !idValidPhone(phone) ) {
                errorMessage = errorMessage + "- поле Телефон<br/>"
            }
        } 
        if(typeof summa != "undefined") {
            // проверим сумму
            if ( !idValidSumma(summa) ) {
                errorMessage = errorMessage + "- поле Сумма<br/>"
            }
        } 

        if ( errorMessage != "" ) {
            
            formValid = false

            errorMessage = "Проверьте:</br>" + errorMessage

            // console.log(errorMessage)

            showError("Ошибка", errorMessage)
        } else {

            formValid = true 

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
                $(".popup__thanks").addClass("open")
                $("body").addClass("noscroll")
              }    
        }

        return true

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
            $("body").addClass("noscroll")
            e.preventDefault()
        })
    }
}

const popups__thanks = $(".popup__thanks-link")
if (popups__thanks.length > 0) {
    for (let index = 0; index < popups__thanks.length; index++) {
        const element = popups__thanks[index];
        $(element).click(function (e) {
            
            //
            // закроем другие попапы
            if (formValid) {
                $(".popup").removeClass("open")
                $(".popup__thanks").addClass("open")
                $("body").addClass("noscroll")
            }

            e.preventDefault()
        })
    }
}

$(".popup__close").click(function (e) {

    if (formValid) {
        $(".popup").removeClass("open")
        $("body").removeClass("noscroll")
    } else {
        $(".popup__error").removeClass("open")
        formValid = true
    }
    e.preventDefault()

    // если тест пройден
    if (isLastQuestion) {
        window.location.replace("https://bankrotam.net/");
    }
})

const maxScroll = 1585 - $(document).width()

$(".stages__items").on("mousewheel", function (event) {

    console.log('mousewheel')

    var scrollLeft = $(".stages__items").scrollLeft()
    var scrollValue = scrollLeft - event.deltaY * event.deltaFactor;
    $(".stages__items").scrollLeft(scrollValue)
    if (scrollLeft > 0 && scrollLeft < maxScroll) {
        event.preventDefault()
    }
})

$(".stages__items").scroll(function(){
    console.log('scroll')
})


const question = $("#question").val() - 1
const questions = $("#questions").val()
const ready = Math.round((99 / questions) * question)

if (question == 1) {
    // чистим LocalStorage
    for (let index = 1; index <= questions; index++) {
        localStorage.setItem("q" + index.toString(), "")
        localStorage.setItem("a" + index.toString(), "")
    }
    
}

$(".quiz__progressbar-count").html("Вопрос " + question + " из " + questions)
$(".quiz__progressbar-percent").html(ready + "%")
$(".quiz__progressbar-process").attr(
    "style",
    "grid-column: 1 / " + ready + " ;"
)

if (question == questions) 
{
    $(".quiz__form-btn-next").html("Завершить опрос")
    isLastQuestion = true
}

$(".quiz__form-btn-next").click(function (e) {
    //
        // собираем ответы
        let questionText = $(".quiz__title").html()
        let questionAnswer = $("input:checked.check__input").parent().find(".quiz__answers-text").html()

        if (typeof questionAnswer == "undefined") {
            questionAnswer = $(".quiz--input").val()
        }
        
        localStorage.setItem("q"+question.toString(), questionText)
        localStorage.setItem("a"+question.toString(), questionAnswer)

    if (isLastQuestion) {
        //отправляем форму
        let allQuestionsAnswers = "";

        for (let index = 1; index <= questions; index++) {
            allQuestionsAnswers += index.toString() + ". " + localStorage.getItem("q"+index.toString()).trim() + "\n"
            allQuestionsAnswers += "- " + localStorage.getItem("a"+index.toString()).trim() + "\n"
            allQuestionsAnswers += "\n"
        }

        message = allQuestionsAnswers

        $.post(
            "../../sendquiz.php",
            {
                message
            },
            onAjaxSuccess
          );
           
          function onAjaxSuccess(data)
          {
            // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
            // console.log(data)
            $(".popup__thanks").addClass("open")
            $("body").addClass("noscroll")
          }    
                
        e.preventDefault()
    }

})

const href = document.location.href
const anchor = href.substr(href.lastIndexOf('?') + 1, 8)

// console.log(href, anchor)

if (anchor == "question") {
    $('html').animate({ scrollTop: $(".quiz").offset().top - 140 }, 300);
}