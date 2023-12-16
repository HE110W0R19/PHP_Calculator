<?php
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                echo '<p class="error">Деление на ноль невозможно(БАААННН!!).</p>';
            }
            break;
        default:
            echo '<p class="error">Неверный оператор, ты вообще кто чел...</p>';
            break;
    }
}
?>