<?php 
//---------------------------------------------------------------------------------------------------//
// Naam script          : login.php
// Omschrijving         : Op deze pagina kan je inloggen
// Naam ontwikkelaar    : Tejo Veldman
// Project		        : Scootershop-Vesuvio
// Datum		        : OefenExamen - periode 2 - 2025
//---------------------------------------------------------------------------------------------------// 

// error styles
$form_error = "form-container";
$error_txt = "";

if(isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        $form_error = "form-container-error";
        $error_txt = "<p class='error-text'> Een of meer verplichte velden zijn leeg. Vul alle velden in om verder te gaan. </p>";
    } else if ($_GET["error"] == "wrongLogin") {
        $form_error = "form-container-error";
        $error_txt = "<p class='error-text'> Het e-mailadres of wachtwoord is onjuist. Controleer je gegevens en probeer het opnieuw. </p>";
    } else if ($_GET["error"] == "stmtfailed") {
        $form_error = "form-container-error";
        $error_txt = "<p class='error-text'> Er is een technische fout opgetreden. Probeer het later opnieuw of neem contact op met de beheerder. </p>";
    } else if ($_GET["error"] == "wrongWay") {
        $form_error = "form-container-error";
        $error_txt = "<p class='error-text'> Je hebt deze pagina op een onjuiste manier geopend. Gebruik het formulier om verder te gaan. </p>";
    } else if ($_GET["error"] == "uitgelogd") {
        $form_error = "form-container-error2";
        $error_txt = "<p class='error-text2'> Je bent succesvol uitgelogd! </p>";
    } else if ($_GET["error"] == "none") {
        $form_error = "form-container-error2";
        $error_txt = "<p class='error-text2'> Account succesvol aangemaakt, log nu in! </p>";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inloggen</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <div class="login-box">
    <div class="<?php echo $form_error; ?>">
        <h2>Inlogformulier</h2>

        <form action="components/login.inc.php" method="POST">

            <!-- Email -->
            <div class="input-group">
                <label>E-mailadres:</label>
                <input type="text" name="email" placeholder="Vul je e-mailadres in" required />
            </div>

            <!-- Password -->
            <div class="input-group">
                <label>Wachtwoord:</label>
                <input type="password" name="ww" placeholder="Vul je wachtwoord in" required />
            </div>

            <!-- Error text -->
            <?php echo $error_txt; ?>

            <!-- Back to Register -->
            <p class="small-text">
                Nog geen account? <a href="register.php">Registreer hier</a>
            </p>

            <!-- Login Button -->
            <div class="button-row">
                <button type="submit" name="login" class="login-btn">Inloggen</button>
                <button type="reset" class="reset-btn">Resetten</button>
            </div>
        </form>
    </div>
    </div>

</body>
</html>
