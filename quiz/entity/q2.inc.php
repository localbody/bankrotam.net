<p class="quiz__subtitle">
q2    Вопрос <?=$question?>
</p>

<h2 class="quiz__title">
    Анкета банкрота — вопросы для процедуры банкротства
</h2>

<p class="quiz__question">
    Название компании
</p>

<form action="index.php" class="quiz__form">
    <input type="hidden" name="question" id="question" value="<?=$question?>">
    <input type="hidden" name="questions" id="questions" value="34">

    <ul class="quiz__answers-list">
        <li class="quiz__answers-item">
            <input class="form__name bg--light" type="text" name="text" id="text" placeholder="Название вашей компании">
        </li>
    </ul>           