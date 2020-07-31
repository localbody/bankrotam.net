<p class="quiz__subtitle">
q4    Вопрос <?=$question?>
</p>

<h2 class="quiz__title">
    Анкета банкрота — вопросы для процедуры банкротства
</h2>

<p class="quiz__question">
    Какова цель банкротства и причина закрытия компании? 
</p>

<form action="" class="quiz__form">
    <input type="hidden" name="question" id="question" value="<?=$nextQuestion?>">
    <input type="hidden" name="questions" id="questions" value="34">
    <ul class="quiz__answers-list">
        <li class="quiz__answers-item">
            <input class="form__name bg--light" type="text" name="why" id="why" placeholder="Ваш ответ">
        </li>
    </ul>