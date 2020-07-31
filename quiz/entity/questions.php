<?php

    $questons = '
    {
        "questions" : 
        [
            {
                "n" : 1,
                "question" : "Введите ваш E-Mail",
                "type" : "input_text"
            },
            {
                "n" : 2,
                "question" : "Имеется ли доступ к действующему директору юрлица?",
                "type" : "yes-no"
            },
            {
                "n" : 3,
                "question" : "Имеется ли доступ к действующему директору юрлица?",
                "type" : "variant",
                "answers" : [
                                "Вариант 1",
                                "Вариант 2",
                                "Вариант 3"
                            ]
            }
        ]
    }
    ';

    $numberQuestion = isset($_GET['question']) ? $_GET['questions'] : 1;

    $arrQuestions = json_decode($questons)->questions;

    // var_dump($arrQuestions);

    foreach ($arrQuestions as $key => $value) {
        // var_dump($key);
        // var_dump($value->n);
        // var_dump($value->question);
        // var_dump($value->type);
        // var_dump($value->answers);

        // search in list

        if ($numberQuestion == $value->n) {
            echo '<p class="quiz__subtitle">
                    Вопрос '.$value->n.'
                  </p>
                
                  <h2 class="quiz__title">
                    Анкета банкрота — вопросы для процедуры банкротства
                  </h2>
                
                  <p class="quiz__question">
                    '. $value->question .'
                  </p>
                  
                  <form action="index.php" class="quiz__form">
                    <input type="hidden" name="question" id="question" value="'.($numberQuestion + 1). '">
                    <input type="hidden" name="questions" id="questions" value="34">
                
                    <ul class="quiz__answers-list">
                ';

                  switch ($value->type) {
                    case 'input_text':
                        echo '
                            <li class="quiz__answers-item">
                            <input class="form__name bg--light" type="text" name="answer" id="answer" placeholder="">
                            </li>
                        ';
                        break;
                    case 'yes-no':
                        echo '
                        <li class="quiz__answers-item">
                            <label class="quiz__answers-label">
                            <input class="check__input" type="radio" name="answer" value="yes"/>
                            <svg class="check__box" viewBox="0 0 30 30">
                                <path class="check__mark" d="M15 0C6.72867 0 0 6.72867 0 15C0 23.2713 6.72867 30 15 30C23.2713 30 30 23.2713 30 15C30 6.72867 23.2713 0 15 0ZM22.6025 11.8213L14.4775 19.9461C14.2337 20.1899 13.9137 20.3126 13.5938 20.3126C13.2738 20.3126 12.9538 20.1899 12.71 19.9461L8.64761 15.8837C8.15872 15.3951 8.15872 14.6049 8.64761 14.1163C9.13628 13.6274 9.92615 13.6274 10.415 14.1163L13.5938 17.295L20.8351 10.0539C21.3238 9.56497 22.1136 9.56497 22.6025 10.0539C23.0912 10.5425 23.0912 11.3324 22.6025 11.8213Z"/>
                                <circle class="check__border" cx="15" cy="15" r="14.5" />
                            </svg>
                            <p class="quiz__answers-text">Да</p>
                        </label>
                        </li>
                        <li class="quiz__answers-item">
                            <label class="quiz__answers-label">
                            <input class="check__input" type="radio" name="answer" value="no"/>
                            <svg class="check__box" viewBox="0 0 30 30">
                                <path class="check__mark" d="M15 0C6.72867 0 0 6.72867 0 15C0 23.2713 6.72867 30 15 30C23.2713 30 30 23.2713 30 15C30 6.72867 23.2713 0 15 0ZM22.6025 11.8213L14.4775 19.9461C14.2337 20.1899 13.9137 20.3126 13.5938 20.3126C13.2738 20.3126 12.9538 20.1899 12.71 19.9461L8.64761 15.8837C8.15872 15.3951 8.15872 14.6049 8.64761 14.1163C9.13628 13.6274 9.92615 13.6274 10.415 14.1163L13.5938 17.295L20.8351 10.0539C21.3238 9.56497 22.1136 9.56497 22.6025 10.0539C23.0912 10.5425 23.0912 11.3324 22.6025 11.8213Z"/>
                                <circle class="check__border" cx="15" cy="15" r="14.5" />
                            </svg>
                            <p class="quiz__answers-text">Нет</p>
                        </label>
                        </li>
                        ';
                        break;
                    case 'variant':
                        
                        foreach ($value->answers as $answer) {
                            echo '
                            <li class="quiz__answers-item">
                                <label class="quiz__answers-label">
                                <input class="check__input" type="checkbox" />
                                <svg class="check__box" viewBox="0 0 30 30">
                                    <path class="check__mark" d="M15 0C6.72867 0 0 6.72867 0 15C0 23.2713 6.72867 30 15 30C23.2713 30 30 23.2713 30 15C30 6.72867 23.2713 0 15 0ZM22.6025 11.8213L14.4775 19.9461C14.2337 20.1899 13.9137 20.3126 13.5938 20.3126C13.2738 20.3126 12.9538 20.1899 12.71 19.9461L8.64761 15.8837C8.15872 15.3951 8.15872 14.6049 8.64761 14.1163C9.13628 13.6274 9.92615 13.6274 10.415 14.1163L13.5938 17.295L20.8351 10.0539C21.3238 9.56497 22.1136 9.56497 22.6025 10.0539C23.0912 10.5425 23.0912 11.3324 22.6025 11.8213Z"/>
                                    <circle class="check__border" cx="15" cy="15" r="14.5" />
                                </svg>
                                <p class="quiz__answers-text">'.$answer.'</p>
                                </label>
                                ';
                        }

                        break;
                                
                    default:
                        break;
                }
                
                echo '</ul>';
        }




    }
