<?php 
session_start();
require_once 'menu.php';
require_once 'sql/sql1.php';
$page = $_GET['page'] ?? 'fooldal';
$allowed = ['fooldal', 'kepek', 'kapcsolat', 'uzenetek', 'belep', 'kilep','regisztracio'];
if (in_array($page, $allowed)) {
    include "phps/{$page}.php";
} else {
    echo "Nincs ilyen oldal.";
}
require_once 'alul.php';
?>