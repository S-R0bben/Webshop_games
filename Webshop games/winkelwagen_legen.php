<?php
session_start();


$_SESSION['Winkelwagen'] = array();
header("Location: ../webshop games/checkout.php");

?>