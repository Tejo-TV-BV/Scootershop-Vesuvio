<?php

// Check of de variable leeg zijn
function emptyInputRegister($naam, $achternaam, $contact_nr, $email, $ww) {
    $result;
    if(empty($naam) || empty($achternaam) || empty($contact_nr) || empty($email) || empty($ww)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Check of de layout email klopt
function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email) {
    $sql = "SELECT * FROM user WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "<script>window.location.href = '../register.php?error=stmtfailed';</script>";
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $naam, $achternaam, $contact_nr, $email, $ww, $role) {
    $sql = "INSERT INTO user (F_name, L_name, contact_nr, email, password, role) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "<script>window.location.href = '../register.php?error=stmtfailed';</script>";
        exit();
    }

    $db_ww = hash('sha256', $ww);

    mysqli_stmt_bind_param($stmt, "ssssss", $naam, $achternaam, $contact_nr, $email, $db_ww, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script>window.location.href = '../login.php?error=none';</script>";
    exit();
}

function emptyInputLogin($email, $ww) {
    $result;
    if(empty($email) || empty($ww)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $ww) {
    $emailExists = emailExists($conn, $email);

    if ($emailExists === false) {
        echo "<script>window.location.href = '../login.php?error=wrongLogin';</script>";
        exit();
    }

    $db_ww = $emailExists["password"];
    $wwHashed = hash('sha256', $ww);
    if($db_ww === $wwHashed) {
        $wwChecker = true;
    } else {
        $wwChecker = false;
    }

    if ($wwChecker === false) {
        echo "<script>window.location.href = '../login.php?error=wrongLogin';</script>";
        exit();
    } else if ($wwChecker === true) {
        if ($emailExists["role"] == 1) {
            session_start();
            $_SESSION["userid"] = $emailExists["ID"];
            echo "<script>window.location.href = '../winkelwagen.php?error=none';</script>";
            exit();
        } else if ($emailExists["role"] == 2) {
            session_start();
            $_SESSION["userid"] = $emailExists["ID"];
            echo "<script>window.location.href = '../admin-account.php?error=none';</script>";
            exit();
        } else {
            echo "<script>window.location.href = '../login.php?error=noRole';</script>";
            exit();
        }

    }
}