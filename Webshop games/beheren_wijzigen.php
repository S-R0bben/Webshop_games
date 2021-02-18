<?php
//$vraag = " UPDATE producten SET product_naam='$_POST[product_naam]', omschrijving='$_POST[omschrijving]',prijs='$_POST[prijs]',foto='$_POST[foto]' WHERE  "
//UPDATE producten SET product_naam = 'levi', omschrijving = 'gitaar', prijs = '1000' WHERE producten.id = 4;
session_start();
//database connectie maken
include 'connectie.php';

// gegevens opvragen
$id = $_POST['Prod_id'];
$Prod_naam = $_POST['Prod_naam'];
$Prod_omschrijving = $_POST['Prod_omschrijving'];
$Prod_prijs = $_POST['Prod_prijs'];
$Prod_image = $_POST['Prod_image'];



//query maken 
$vraag = " UPDATE producten SET Prod_naam='$_POST[Prod_naam]', Prod_omschrijving='$_POST[Prod_omschrijving]',Prod_prijs='$_POST[Prod_prijs]',Prod_image='$_POST[Prod_image]' WHERE ";
$vraag .= "Prod_id = '".$id."' ";

//var_dump($product_naam, $omschrijving, $prijs, $foto);

$resultaat = $conn->query($vraag);

if ( $resultaat == false )
{
   echo "Fout in insert-query of bijwerken niet gelukt!";
}

else 
{
    echo "Gelukt! product is bijgewerkt.";

}

header('location:../webshop games/Beheren.php');

?>