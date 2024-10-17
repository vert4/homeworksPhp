<?php
$a='Рыба';
$b='человек';

echo basename(__FILE__ ."<br>");
echo __LINE__."<br>";

$text = <<<TEXT
$a рыбою сыта, а $b человеком
TEXT;
echo $text."<br>";

echo $a .' рыбою сыта, а '. $b .' человеком'."<br>";
?>