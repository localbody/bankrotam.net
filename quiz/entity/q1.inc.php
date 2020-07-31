<p class="quiz__subtitle">
    Вопрос <?=$question?>
</p>

<h2 class="quiz__title">
    Анкета банкрота — вопросы для процедуры банкротства
</h2>

<p class="quiz__question">
    Введите ваш E-Mail
</p>

<form action="index.php" class="quiz__form">
    <input type="hidden" name="question" id="question" value="<?=$nextQuestion?>">
    <input type="hidden" name="questions" id="questions" value="34">

    <ul class="quiz__answers-list">
        <li class="quiz__answers-item">
            <input class="form__name bg--light" type="email" name="email" id="email" placeholder="Ваш E-Mail">
        </li>
    </ul>



