<?php
echo "Введите делимое: ";
$enteredNumbers1 = fgets(STDIN);
$divisible = trim($enteredNumbers1); //Делимое

echo "Введите делитель: ";
$enteredNumbers2 = fgets(STDIN);
$divider = trim($enteredNumbers2); //Делитель

if ($divider === "0") {//проверяем, что делитель не равен "0"
    echo "Делить на ноль нельзя" . PHP_EOL;
} else {
    $divisible = intval($divisible); 
    $divider = intval($divider);
    if ($divisible === 0 || $divider === 0) { // проверяем что, введенные числа преобразовались в integer 
        echo "Введите пожалуйсто, число" . PHP_EOL;
    } else {
        echo "Результат: " .  $divisible / $divider . PHP_EOL;
    }
}
?>
