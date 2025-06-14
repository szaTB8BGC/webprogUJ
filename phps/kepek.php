<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['felhasznalo'])) {
    $uploadDir = 'uploads/';
    $file = $_FILES['image'] ?? null;

    if ($file && $file['error'] === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($ext, $allowed)) {
            $newName = uniqid() . "." . $ext;
            move_uploaded_file($file['tmp_name'], $uploadDir . $newName);
            echo "<p>Kép feltöltve!</p>";
        } else {
            echo "<p>Nem támogatott fájltípus!</p>";
        }
    } else {
        echo "<p>Hiba a feltöltésnél.</p>";
    }
}
include 'oldalak/kepek.php';