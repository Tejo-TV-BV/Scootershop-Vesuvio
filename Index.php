<?php
//---------------------------------------------------------------------------------------------------//
// Naam script		  : index.php
// Omschrijving		  : Dit is de homepagina
// Naam ontwikkelaar  : Tejo Veldman
// Project		      : Scootershop-Vesuvio 
// Datum		      : OefenExamen - periode 2 - 2025
//---------------------------------------------------------------------------------------------------//
session_start();
require_once 'Config/DB_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo/small-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <a href="index.php"><img src="assets/images/logo/full-logo.png" alt="Logo"></a>
        <input type="text" placeholder="Search..">
        <nav>
            <a href="pages/info.php"><i class="fa-solid fa-circle-info"></i></a>
            <a href="pages/winkelwagen.php"><i class="fa-solid fa-cart-arrow-down"></i></a>
            <a href="pages/login.php"><i class="fa-solid fa-user"></i></a>
        </nav>
    </header>

    <!-- main body -->
<div class="items">
    <?php
    $sql_parts = mysqli_query($conn, "SELECT * FROM parts");
        if ($sql_parts->num_rows > 0) {
        while ($row = $sql_parts->fetch_assoc()) {
            echo "<div class='item-card'>
                  <h3 class='item-name'>" . $row['part'] . "</h3>
                  <p class='item-price'>" . $row['sell_price'] . "</p>
                
                  <form method='POST' action='pages/winkelwagen.php'>
                    <input type='hidden' name='part_id' value='" . $row['id'] . "'>
                    <button type='submit' class='add-btn'>Voeg toe</button>
                  </form>
                  </div>";
        }
    } else {
        echo "No users found";
    }

    ?>


</div>

    
</body>
</html>