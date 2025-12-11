<?php
//---------------------------------------------------------------------------------------------------//
// Naam script		  : index.php
// Omschrijving		  : Dit is de homepagina
// Naam ontwikkelaar  : Tejo Veldman
// Project		      : Scootershop-Vesuvio 
// Datum		      : OefenExamen - periode 2 - 2025
//---------------------------------------------------------------------------------------------------//
session_start();
if(isset($_SESSION['winkelwagen'])){
    if(isset($_POST["part_id"])){
        $_SESSION['winkelwagen'][] = $_POST["part_id"];
    }
} else {
    $_SESSION['winkelwagen'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <link rel="shortcut icon" type="x-icon" href="../assets/images/logo/small-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <a href="../index.php"><img src="../assets/images/logo/full-logo.png" alt="Logo"></a>
        <nav>
            <a href="info.php"><i class="fa-solid fa-circle-info"></i></a>
            <a href="winkelwagen.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
        </nav>
    </header>
    <div class="winkelwagen-pagina">
        <div class="winkelwagen-items">
            <h1>Winkelwagen</h1>
        </div>
        <div class="winkelwagen-totaal">

        </div>
    </div>
</body>
</html>