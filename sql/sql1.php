<?php
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=tb8_adt',
        'tb8_adt',
        'Xx12345678xX',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (PDOException $e) {
    die("Adatbázis hiba: " . $e->getMessage());
}
?>