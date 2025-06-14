<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Üzenetek</title>
 <link rel="stylesheet" href="styles.css">
</head>
<body> 
<header>
    <h1>Üzenetek</h1>
<div class="php">
        <?php
session_start();
include("felul.php");
?>

</header>
<main><h2>Üzenetek</h2>
<table style="color: white;">
    <thead><tr><th>Feladó</th><th>Email</th><th>Üzenet</th><th>Időpont</th></tr>
</thead>
<tbody>
<?php
foreach ($uzenetek as $msg): ?>
    <tr>
    <td> <?= htmlspecialchars($msg['nev'])?></td>
    <td> <?= htmlspecialchars($msg['email'])?></td>
    <td> <?= nl2br(htmlspecialchars($msg['uzenet']))?></td>
        <td> <?= $msg['datum']?></td>
    </tr>
<?php endforeach; ?>

</tbody>
</table>
</main>
</body>
</html>


