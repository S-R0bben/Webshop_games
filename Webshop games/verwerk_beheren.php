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


if ($resultaat->num_rows > 0) {

   while($rij = $resultaat->fetch_assoc()) //Een rij ophalen
{
   $id = $rij['Prod_id'];
   $naam = $rij['Prod_naam'];
   $prijs = $rij['Prod_prijs'];
   $omschrijving = $rij['Prod_omschrijving'];
   $image = $rij['Prod_image'];

   header("Location: ../webshop games/producten.php");
}
}


?>