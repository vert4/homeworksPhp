<?php

$a = 6;
$b = 0;
if ($b === 0){
echo "Делить на 0 нельзя";
}
if (is_int($a) & is_int($b)) {
echo $a / $b;
} else {
echo "Введите, пожалуйста, число";
};

?>
