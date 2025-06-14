<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nev = trim($_POST['nev'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $uzenet = trim($_POST['uzenet'] ?? '');

    $errors = [];
    if (!$nev || !$email || !$uzenet) $errors[] = 'Kérem minden mezőt töltsön ki!';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Helytelen email-cím!';

    if (empty($errors)) {
        $nev = isset($_SESSION['felhasznalo']) ? $_SESSION['felhasznalo']['teljes_nev'] : 'Vendég';
        $stmt = $dbh->prepare("INSERT INTO uzenetek (nev, email, uzenet, datum) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$nev, $email, $uzenet]);
        header('Location: index.php?page=uzenetek');
        exit;
    }
}
include 'oldalak/kapcsolat.php';
?>