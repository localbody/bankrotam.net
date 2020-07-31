<p class="quiz__subtitle">
    Вопрос <?=$question?>
</p>

<h2 class="quiz__title">
    Анкета банкрота — вопросы для процедуры банкротства
</h2>

<p class="quiz__question">
    Имеется ли доступ к действующему директору юрлица?
</p>

<form action="index.php#quiz" class="quiz__form">
    <input type="hidden" name="question" id="question" value="<?=$nextQuestion?>">
    <input type="hidden" name="questions" id="questions" value="34">
    <ul class="quiz__answers-list">

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

    </ul>
