<?php
    $server = "localhost";
    $gebruiker = "root";
    $wachtwoord = "";
    $databasenaam = "Webshop_games";

    $conn = new mysqli( $server, $gebruiker, $wachtwoord, $databasenaam);

    if ($conn -> connect_error )
    {
    die ( "Fout: " . $conn -> connect_error );
    }
    else
?>