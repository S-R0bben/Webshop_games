<?php
session_start();
//database connectie maken
include 'connectie.php';

// gegevens opvragen
$id = $_POST['Prod_id'];


//query maken 
$vraag = " DELETE  FROM producten WHERE Prod_id = '".$id."' ";



//DELETE FROM producten WHERE producten.id = 4;


$resultaat = $conn->query($vraag);

if ( $resultaat == false )
{
   echo "Fout in insert-query of toevoegen niet gelukt!";
}
else
{
   header('location:../webshop games/Beheren.php');
   exit;
}



?>