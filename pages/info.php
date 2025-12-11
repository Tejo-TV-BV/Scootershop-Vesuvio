<?php
//---------------------------------------------------------------------------------------------------//
// Naam script		  : info.php
// Omschrijving		  : Dit is de informatiepagina voor klanten
// Naam ontwikkelaar  : Tejo Veldman
// Project		      : Scootershop-Vesuvio 
// Datum		      : OefenExamen - periode 2 - 2025
//---------------------------------------------------------------------------------------------------//
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pagina</title>
    <link rel="shortcut icon" type="x-icon" href="../assets/images/logo/small-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <a href="../index.php"><img src="../assets/images/logo/full-logo.png" alt="Logo"></a>
        <nav>
            <a><i class="fa-solid fa-circle-info"></i></a>
            <a href="winkelwagen.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
        </nav>
    </header>

    <!-- Info content -->
    <div class="info-container">
        <h1>Welkom bij Scootershop Vesuvio</h1>
        <p>Scootershop Vesuvio is dé specialist op het gebied van scooteronderdelen en accessoires. Sinds onze oprichting in 2010 streven we ernaar om onze klanten te voorzien van hoogwaardige onderdelen tegen scherpe prijzen. Of je nu een nieuwe rem, accu of een compleet onderhoudspakket nodig hebt, bij ons ben je aan het juiste adres.</p>
        
        <p>Onze website is ontwikkeld met gemak voor de klant in gedachten. Je kunt eenvoudig onderdelen bekijken, vergelijken en direct online bestellen. Wij zorgen voor een snelle levering en bieden ondersteuning bij al je vragen.</p>

        <img src="../assets/images/example-scooter.png" alt="Scooter onderdelen">

        <p>Naast onze uitgebreide webshop hebben we ook een fysieke winkel waar je onze producten kunt bekijken en advies kunt krijgen van ons deskundige team. Onze passie voor scooters delen we graag met onze klanten, en wij helpen je graag de juiste keuzes te maken voor jouw voertuig.</p>

        <p>Bedankt voor je bezoek aan Scootershop Vesuvio. We hopen dat je snel vindt wat je zoekt!</p>
    </div>
    
</body>
</html>
