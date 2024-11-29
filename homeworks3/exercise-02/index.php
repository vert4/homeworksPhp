<?php
echo 'Фамилия: ';
$surNameInput = fgets(STDIN);
$surName = trim(string: $surNameInput);

echo 'Имя: ';
$firstNameInput = fgets(STDIN);
$firstName = trim(string: $firstNameInput);

echo 'Отчество: ';
$lastNameInput = fgets(STDIN);
$lastName = trim(string: $lastNameInput);
echo PHP_EOL;


$nameArray = array(
    "family" => mb_convert_case($surName, MB_CASE_TITLE, "UTF-8"),
    "firstName" => mb_convert_case($firstName, MB_CASE_TITLE, "UTF-8"),
    "lastName" => mb_convert_case($lastName, MB_CASE_TITLE, "UTF-8"),
);

$fullName = $nameArray["family"] . ' ' . $nameArray["firstName"] . ' ' . $nameArray["lastName"];
$fio = mb_substr($nameArray["family"], 0, 1,"UTF-8") . mb_substr($nameArray["firstName"], 0, 1) . mb_substr($nameArray["lastName"], 0, 1);
$lastNameInitials = $nameArray["family"] . ' ' . mb_substr($nameArray["firstName"], 0, 1)  . '.' . mb_substr($nameArray["lastName"], 0, length: 1) . '.';

echo "Полное имя: " . $fullName . PHP_EOL;
echo "Фамилия и иницыалы: " . $lastNameInitials . PHP_EOL;
echo "Аббревиатура: " . $fio . PHP_EOL;
?>
