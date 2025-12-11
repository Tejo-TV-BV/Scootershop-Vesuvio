<?php 
//---------------------------------------------------------------------------------------------------//
// Naam script          : register.php
// Omschrijving         : Op deze pagina kan je registreren.
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
    } else if ($_GET["error"] == "invalidemail") {
        $form_error = "form-container-error";
        $error_txt = "<p class='error-text'> Het ingevoerde e-mailadres is ongeldig. Controleer of je een geldig adres hebt ingevuld, bijvoorbeeld: voorbeeld@domein.com </p>";
    } else if ($_GET["error"] == "emailTaken") {
        $form_error = "form-container-error";
        $error_txt = "<p class='error-text'> Dit e-mailadres is al in gebruik. Probeer een ander e-mailadres of log in als je al een account hebt. </p>";
    } else if ($_GET["error"] == "stmtfailed") {
        $form_error = "form-container-error";
        $error_txt = "<p class='error-text'> Er is een technische fout opgetreden. Probeer het later opnieuw of neem contact op met de beheerder. </p>";
    } else if ($_GET["error"] == "wrongWay") {
        $form_error = "form-container-error";
        $error_txt = "<p class='error-text'> Je hebt deze pagina op een onjuiste manier geopend. Gebruik het formulier om verder te gaan. </p>";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registratieformulier</title>
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
        <h2>Registratieformulier</h2>

        <form action="components/register.inc.php" method="POST">

            <!-- Voornaam + Achternaam -->
            <div class="name-row">
                <div class="input-group">
                    <label>Voornaam:</label>
                    <input type="text" name="voornaam" placeholder="Vul je voornaam in" minlength="2" maxlength="30" required />
                </div>

                <div class="input-group">
                    <label>Achternaam:</label>
                    <input type="text" name="achternaam" placeholder="Vul je achternaam in" minlength="2" maxlength="30" required />
                </div>
            </div>

            <!-- Telefoonnummer + Email -->
            <div class="contact-row">
                <div class="input-group">
                    <label>Telefoonnummer:</label>
                    <input type="text" name="contact" placeholder="Vul je telefoonnummer in" minlength="10" maxlength="15" pattern="[0-9]{10,15}" required />
                </div>

                <div class="input-group">
                    <label>E-mailadres:</label>
                    <input type="email" name="email" placeholder="Vul je e-mailadres in" minlength="5" maxlength="50" required />
                </div>
            </div>

            <!-- Wachtwoord -->
            <div class="input-group">
                <label>Wachtwoord:</label>
                <input type="password" name="ww" placeholder="Vul je wachtwoord in" minlength="8" required />
            </div>

            <!-- Foutmelding -->
            <?php echo $error_txt; ?>

            <!-- Terug naar login -->
            <a class="back-link" href="login.php"><- Terug naar inloggen</a>

            <!-- Registreerknop -->
            <div class="button-row">
                <button type="submit" name="register" class="register-btn">Registreren</button>
                <button type="reset" class="reset-btn">Resetten</button>
            </div>

        </form>
    </div>
</div>

</body>
</html>
