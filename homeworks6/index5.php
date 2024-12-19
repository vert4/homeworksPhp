<?php
session_start();

$opens = $_SESSION ['count'];
echo 'Количество открытий страницы index4.php: ' . $opens;
