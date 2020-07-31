<p class="quiz__subtitle">
    Вопрос <?=$question?>
</p>

<h2 class="quiz__title">
    Анкета банкрота — вопросы для процедуры банкротства
</h2>

<p class="quiz__question">
    Ваш регион? 
</p>

<form action="" class="quiz__form">
    <input type="hidden" name="question" id="question" value="<?=$nextQuestion?>">
    <input type="hidden" name="questions" id="questions" value="34">
    <ul class="quiz__answers-list">
        <li class="quiz__answers-item">
            <input class="form__name bg--light" type="text" name="region" id="region" placeholder="Ваш регион">
        </li>
    </ul>
