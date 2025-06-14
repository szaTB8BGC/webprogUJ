<?php
function loginUser($felhasznalo_nev, $jelszo) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT * FROM felhasznalok WHERE felhasznalo_nev = ?");
    $stmt->execute([$felhasznalo_nev]);
    $felhasznalo = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($felhasznalo && password_verify($jelszo, $felhasznalo['jelszo'])) {
        $_SESSION['felhasznalo'] = 
        [
            'id'              => $felhasznalo['id'],
            'felhasznalo_nev' => $felhasznalo['felhasznalo_nev'],
            'teljes_nev'      => $felhasznalo['teljes_nev']
        ];
        return true;
    }
    return false;
}

function logoutUser() {
    unset($_SESSION['felhasznalo']);
}

function registerUser($vezeteknev, $keresztnev, $felhasznalo_nev, $jelszo) {
    global $dbh;
    try {
        $teljes_nev = $vezeteknev . ' ' . $keresztnev;
        $hash = password_hash($jelszo, PASSWORD_DEFAULT);
        $stmt = $dbh->prepare("INSERT INTO felhasznalok (felhasznalo_nev, jelszo, teljes_nev) VALUES (?, ?, ?)");
        return $stmt->execute([$felhasznalo_nev, $hash, $teljes_nev]);
    } catch (PDOException $e) {
        echo "Hiba: " . $e->getMessage();
        return false;
    }
}