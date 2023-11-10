<?php
require_once "vendor/autoload.php";

use App\Button;
use App\FormGenerator;
use App\TextField;

if (isset($_POST['submit'])) {
    $numberButtons = filter_input(INPUT_POST, 'numberButtons', FILTER_SANITIZE_NUMBER_INT);
    $namesButtons = filter_input(INPUT_POST, 'namesButtons', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $form = new FormGenerator(2, $numberButtons, $namesButtons);
    $button = new TextField($numberButtons, $namesButtons);
    echo $button->render();
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
            <input type="number" name="numberButtons">
            <input type="text" name="namesButtons">
            <button type="submit" name="submit">Create</button>
        </form>
    </div>
</main>
</body>
</html>
