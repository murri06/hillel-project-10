<?php
require_once "vendor/autoload.php";

use App\FormGenerator;

if (isset($_POST['submit'])) {
    $numberButtons = filter_input(INPUT_POST, 'numberButtons', FILTER_SANITIZE_NUMBER_INT);
    $numberText = filter_input(INPUT_POST, 'numberText', FILTER_SANITIZE_NUMBER_INT);
    $namesButtons = filter_input(INPUT_POST, 'namesButtons', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $namesText = filter_input(INPUT_POST, 'namesText', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $form = new FormGenerator($numberText, $namesText, $numberButtons, $namesButtons);
    echo $form->construct();
}
?>

<html>
<head>
    <title>Генератор форми</title>
</head>
<body>
<main>
    <div>
        <h2>Генератор форми</h2>
        <form method="post">
            <label>Введіть необхідну кількість кнопок та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberButtons">
            <input type="text" name="namesButtons"><br>
            <label>Введіть необхідну кількість текстових полів та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberText">
            <input type="text" name="namesText"><br>
            <label>Введіть необхідну кількість Чекбоксів та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberCheckBox">
            <input type="text" name="namesCheckBox"><br>
            <label>Введіть необхідну кількість опцій для селектора та їх назви через розділювач(,) : </label>
            <input type="number" min="0" name="numberCheckBox">
            <input type="text" name="namesCheckBox"><br>
            <button type="submit" name="submit">Create</button>
        </form>
    </div>
</main>
</body>
</html>
