<?php
$stmt = $dbh->query("SELECT * FROM uzenetek ORDER BY datum DESC");
$uzenetek = $stmt->fetchAll(PDO::FETCH_ASSOC);
include 'oldalak/uzenetek.php'
?>
