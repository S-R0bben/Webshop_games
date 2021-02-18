<?php
session_start();
include 'Connectie.php';

$Prod_id = $_POST['Prod_id'];
$Prod_naam = $_POST['Prod_naam'];
$Prod_prijs = $_POST['Prod_prijs'];
$Prod_omschrijving = $_POST['Prod_omschrijving'];
$Prod_image = $_POST['Prod_image'];



$vraag = "INSERT INTO producten( Prod_id, Prod_naam, Prod_prijs, Prod_omschrijving, Prod_image) 
Values('".$Prod_id."' , '" .$Prod_naam."' , '".$Prod_prijs."' , '".$Prod_omschrijving."' , '".$Prod_image."')";
$resultaat = $conn->query($vraag);


if ( $resultaat == false )
{
   echo "Fout in insert-query of toevoegen niet gelukt!";
}
else
{
   header('../Webshop games/Beheren.php');
   exit;
}

var_dump($resultaat);


?>