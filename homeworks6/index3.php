<?php
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="downloaded.txt"');
$content = $_GET['text'];
echo $content;
