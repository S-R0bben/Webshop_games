<?php
session_start();

if (isset($_SESSION['Winkelwagen'])) {
$id = $_POST['Prod_id'];
array_push($_SESSION['Winkelwagen'],$id);
header('location:../webshop games/producten.php');
}
else
{
header('location:../webshop games/login.php');
}

?>