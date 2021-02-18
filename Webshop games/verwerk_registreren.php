<?php
$Naam = $_POST ['name'];
$Email = $_POST['email'];
$Wachtwoord = $_POST['wachtwoord'];
include 'Connectie.php';

$vraag = "INSERT INTO klant( Email, Naam, Wachtwoord) 
Values('".$Email."' , '" .$Naam."' , '".$Wachtwoord."')";
$resultaat = $conn->query($vraag);


if ( $resultaat == false )
{
   echo "Fout in insert-query of toevoegen niet gelukt!";
}
else
{
   header('../webshop games/home.php');
   exit;
}

echo $vraag;


