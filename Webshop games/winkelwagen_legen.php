<?php
session_start();


$_SESSION['Winkelwagen'] = array();
header("Location: ./Test_winkelwagen.php");

?>