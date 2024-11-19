<?php
echo "Введите делимое: ";
$number1 = fgets(STDIN);
$a = trim($numbers1); //Делимое

echo "Введите делитель: ";
$numbers2 = fgets(STDIN);
$b = trim($number2); //Делитель

if ($b === 0){
echo "Делить на 0 нельзя";
}
elseif (is_int($a) & is_int($b)) {
echo $a / $b;
} else {
echo "Введите, пожалуйста, число";
};
?>
