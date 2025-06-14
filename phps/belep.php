<?php
require_once 'sql/sql2.php';

$msg = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['belepes'])) {
        if (loginUser($_POST['felhasznalo_nev'], $_POST['jelszo'])) {
            header('Location: index.php');
            exit;
        } else {
            $error = '<header>Hibás belépési adatok.</header>';
        }
        } elseif (isset($_POST['regisztracio'])) {

        $vezeteknev = trim($_POST['vezeteknev'] ?? '');
        $keresztnev = trim($_POST['keresztnev'] ?? '');
        $felhasznaloNev = trim($_POST['felhasznalo_nev'] ?? '');
        $jelszo = $_POST['jelszo'] ?? '';

        if (empty($vezeteknev) || empty($keresztnev)) {
            $error = '<header>A vezetéknév és keresztnév megadása kötelező a regisztrációhoz.</header>';
        } else {
            if (registerUser($vezeteknev, $keresztnev, $felhasznaloNev, $jelszo)) {
                $msg = '<header>Sikeres regisztráció!</header>';
            } else {
                $error = '<header>A regisztráció nem sikerült. Ellenőrizze az adatokat.</header>';
            }
        }
    }
}
include 'oldalak/belep.php';
/*} elseif (isset($_POST['regisztracio'])) {
        if (registerUser($_POST['vezeteknev'], $_POST['keresztnev'], $_POST['felhasznalo_nev'], $_POST['jelszo'])) {
            $msg = '<header>Sikeres regisztráció!</header>';
        } else {
            $error = '<header>A regisztráció nem sikerült. Ellenőrizze az adatokat.</header>';
        }
    }
} */
?>

