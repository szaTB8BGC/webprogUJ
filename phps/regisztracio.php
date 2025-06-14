<?php
require_once 'sql/sql2.php';

$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['regisztracio'])) {
    if (registerUser($_POST['vezeteknev'], $_POST['keresztnev'], $_POST['felhasznalo_nev'], $_POST['jelszo'])) {
        $msg = '<header>Sikeres regisztráció!</header>';
    } else {
        $msg = '<header>Kérjük minden mezőt töltse ki!</header>';
    }
}
include 'oldalak/belep.php';
?>