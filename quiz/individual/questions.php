<?php

    $questons = '
    {
        "questions" : 
        [
            {
                "n" : 1,
                "question" : "Какая сумма ваших долгов без учета пеней и штрафов?",
                "description" : "Под суммой долгов в этом вопросе понимается текущая задолженность (как срочная, так и просроченная). Если Вы только недавно выбились из графика платежей, то задолженность можно посмотреть в графике платежей по кредиту в колонке («Остаток долга», «Остаток основного долга») в строке, соответствующей последнему месяцу, в котором Вы внесли платеж. Если у Вас вызывает сложности поиск суммы основного долга в графике, либо Вы не платите давно – Вы можете позвонить в банк и уточнить точную сумму долга необходимую Вам для полного закрытия кредита.",
                "type" : "variant",
                "answers": {
                            "1": "До 300 тысяч рублей – банкротство Вам не подходит, Вам лучше попробовать рефинансировать кредиты под более низкую процентную ставку.",
                            "2": "От 300 до 500 тысяч рублей – банкротство возможно, но могут возникнуть сложности, как с принятием заявления судом, так и при проверке обоснованности. Судебная практика при банкротстве физического лица с долгами до 500 тысяч рублей разнится в зависимости от региона и требует тщательного анализа специалистами.",
                            "3": "От 500 тысяч рублей – банкротство возможно, движемся дальше."
                            }
            },
            {
                "n" : 2,
                "question" : "Совершали ли вы сделки с недвижимостью, автотранспортом, акциями, долями в уставном капитале, а также иные сделки на сумму свыше 300 тысяч рублей за последние 3 года?",
                "description" : "Под сделками понимаются: договора купли-продажи, дарения, соглашения о разделе имущества, мировые соглашения и т.д. (в общем, любые добровольные действия с Вашей стороны направленные на отчуждение Вашего имущества).<br>Важно: Сделки с недвижимостью, автотранспортом и долями в уставном капитале интересуют нас в этом вопросе вне зависимости от суммы сделки!",
                "type" : "variant",
                "answers": {
                            "1": "Сделок не было – переходим к следующему вопросу.",
                            "2": "Сделки были – необходимо понять, подлежат ли оспариванию эти сделки. Если сделка совершена с третьим лицом (не родственником) по рыночной цене, а вырученные деньги пошли на погашение задолженности перед кредиторами (хотя бы частично), то движемся дальше."
                            }
            },
            {
                "n" : 3,
                "question" : "Какова стоимость вашего имущества и дебиторской задолженности?",
                "description" : "Дебиторская задолженность – это долги третьих лиц перед Вами. В этом вопросе нас интересует стоимость всего вашего имущества за исключением: предметов домашнего обихода, одежды и единственного незаложенного жилья.",
                "type" : "variant",
                "answers": {
                            "1": "Если стоимость имущества и дебиторской задолженности меньше суммы долгов, которую Вы рассчитали в 1-м вопросе, то переходим к следующему вопросу;",
                            "2": "Если стоимость имущества и дебиторской задолженности больше суммы долгов, то возникает вопрос: «Зачем Вам банкротство?» - продайте имущество, взыщите дебиторскую задолженность и рассчитайтесь с кредиторами самостоятельно. Если же взыскать дебиторскую задолженность не представляется возможным, то необходимо предоставить в суд доказательства бесперспективности взыскания."
                            }
            },
            {
                "n" : 4,
                "question" : "Каков размер вашего дохода за вычетом прожиточного минимума на вас и ваших иждивенцев (детей)?",
                "description" : "Для расчета: берете чистый среднемесячный доход за последние 6-12 месяцев и минусуете от него прожиточный минимум на себя и на детей (если они есть). Узнать величину прожиточного минимума для Вашего региона Вы можете на сайте potrebkor.ru",
                "type" : "variant",
                "answers": {
                            "1": "Если полученная величина >= Суммы долгов, разделенной на 36, то на списание долгов в банкротстве Вам рассчитывать не приходится, т.к. в отношении Вас будет введена процедура реструктуризации долгов. Более точно рассчитать возможность реструктуризации Вы можете по ссылке.",
                            "2": "Если доход отсутствует вовсе, то переходите к следующему вопросу;",
                            "3": "Если доход есть, но за вычетом прожиточных минимумов он не позволяет рассчитаться с Вашим долгом за три года, то списание долгов возможно. Единственное, в зависимости от регионов могут отличаться сроки и затраты на проведение процедуры банкротства."
                            }
            },
            {
                "n" : 5,
                "question" : "При получении кредитов предоставляли ли вы недостоверные сведения, документы?",
                "description" : "",
                "type" : "variant",
                "answers": {
                            "1": "Нет – переходим к следующему вопросу;",
                            "2": "Не помню – нужно постараться вспомнить, т.к. есть риск пройти процедуру банкротства и не освободиться от долгов.",
                            "3": "Да – есть риск не списать долги по завершению процедуры банкротства. Оценку этих рисков лучше доверить специалистам компании «Долгам.НЕТ»"
                            }
            },
            {
                "n" : 6,
                "question" : "Имеются ли объективные причины и их документальное подтверждение тому, что потеряли возможность оплачивать кредиты в срок?",
                "description" : "Под объективными причинами понимаются: сокращение дохода (официального), потеря работы, потеря трудоспособности (инвалидность и т.д.) и т.п.",
                "type" : "variant",
                "answers": {
                            "1": "Да имеются – Поздравляем, Вы можете избавиться от непосильных долгов через процедуру банкротства физических лиц. Но для этого Вам понадобится финансовый управляющий, без которого пройти процедуру невозможно. Благо, найти его проще простого в компании «Долгам.НЕТ». Мы не только предоставим Вам финансового управляющего, но и обеспечим полное юридическое сопровождение в рассрочку. Рассчитать цену банкротства.",
                            "2": "Нет, не помню – Рекомендуем Вам обратиться в компанию «Долгам.НЕТ» для более тщательного анализа ситуации. В 99% мы сможем и Вам помочь списать долги через процедуру банкротства."
                            }
            }
        ]
    }
    ';

    $numberQuestion = isset($_GET['question']) ? $_GET['question'] : 1;

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
