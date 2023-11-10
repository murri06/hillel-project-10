<?php
require_once __DIR__ . "/vendor/autoload.php";

use App\{FormGenerator, RadioButton, Selector, Button, TextField, CheckBox};

if (isset($_POST['submit'])) {
    $numberButtons = filter_input(INPUT_POST, 'numberButtons', FILTER_SANITIZE_NUMBER_INT);
    $numberText = filter_input(INPUT_POST, 'numberText', FILTER_SANITIZE_NUMBER_INT);
    $numberCheckbox = filter_input(INPUT_POST, 'numberCheckBox', FILTER_SANITIZE_NUMBER_INT);
    $numberOptions = filter_input(INPUT_POST, 'numberOptions', FILTER_SANITIZE_NUMBER_INT);
    $numberRadio = filter_input(INPUT_POST, 'numberRadio', FILTER_SANITIZE_NUMBER_INT);
    $namesButtons = filter_input(INPUT_POST, 'namesButtons', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $namesText = filter_input(INPUT_POST, 'namesText', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $namesCheckBox = filter_input(INPUT_POST, 'namesCheckBox', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $namesOptions = filter_input(INPUT_POST, 'namesOptions', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $namesRadio = filter_input(INPUT_POST, 'namesRadio', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $form = new FormGenerator();
    $form->addElement(new TextField($numberText, $namesText));
    $form->addElement(new RadioButton($numberRadio, $namesRadio));
    $form->addElement(new CheckBox($numberCheckbox, $namesCheckBox));
    $form->addElement(new Selector($numberOptions, $namesOptions));
    $form->addElement(new Button($numberButtons, $namesButtons));
}
?>

<html>
<head>
    <title>Генератор форми</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<main>
    <div>
        <form method="post">
            <h2>Генератор форми</h2>

            <label>Введіть необхідну кількість кнопок та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberButtons" value="0">
            <input type="text" name="namesButtons" value=""><br>

            <label>Введіть необхідну кількість текстових полів та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberText" value="0">
            <input type="text" name="namesText" value=""><br>

            <label>Введіть необхідну кількість радіокнопок та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberRadio" value="0">
            <input type="text" name="namesRadio" value=""><br>

            <label>Введіть необхідну кількість Чекбоксів та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberCheckBox" value="0">
            <input type="text" name="namesCheckBox" value=""><br>

            <label>Введіть необхідну кількість опцій для селектора та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberOptions" value="0">
            <input type="text" name="namesOptions" value=""><br>

            <button type="submit" name="submit">Create</button>
        </form>
    </div>
    <div>
        <h2>
            Тут буде відображена <br> згенерована форма
        </h2>
        <?php if (isset($form)) {
            echo $form->render();
        } ?>
    </div>
</main>
</body>
</html>
