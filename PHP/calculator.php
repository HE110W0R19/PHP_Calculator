<?php
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // Проверка на валидность чисел
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo '<p class="error">Пожалуйста, введите числа, иначе бан >:)</p>';
    } else {
        // Выполнение операции
        $result = calculate($num1, $num2, $operator);

        // Вывод результата
        if (isset($result)) {
            echo '<p class="result">С вас: ' . $result . '$ на карту сбер</p>';
        }
    }
}
?>

<div class="calculator-field">
    <form id="calculatorForm" method="post" action="">
        <input type="text" name="num1" placeholder="Пиши сюда" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Потом сюда" required>
        <br>
        <input type="submit" value="public void DoSomething()">
    </form>
</div>

<script src="../JS/script.js"></script>