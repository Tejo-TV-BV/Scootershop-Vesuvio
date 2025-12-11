<?php
// Haal alle parts op
$sql_all_parts = "SELECT * FROM parts";
$result_all_parts = $conn->query($sql_all_parts);

// Controle: bestaat de winkelwagen?
$winkelwagen = isset($_SESSION['winkelwagen']) ? $_SESSION['winkelwagen'] : [];

if ($result_all_parts->num_rows > 0) {
    while ($row = $result_all_parts->fetch_assoc()) {

        // Alleen tonen als dit ID in de winkelwagen zit
        if (in_array($row['ID'], $winkelwagen)) {

            echo "<div class='card-part'>
                    <p>". $row['naam'] . "</p>
                    <div class='icons'>
                        <a onclick='userRemove();'>
                            <img src='../../assets/images/icons/user-remove.svg' />
                        </a>
                    </div>
                  </div>";
        }
    }
} else {
    echo "Geen producten gevonden";
}
?>
