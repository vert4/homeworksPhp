<?php
session_start();
$_SESSION['count'] = isset ($_SESSION ['count'])?
++$_SESSION ['count'] : 0;
$opens = $_SESSION ['count'];

if ($opens % 3 == 0) {
    header("Location: /index5.php");
}
echo '<b>'.'Hello!'.'</b>';
