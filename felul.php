<?php 
require_once 'menu.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <nav>
        <div class="php">
            <?php foreach ($menu as $key => $value): ?>
                <?php if ($key === 'uzenetek' && !isset($_SESSION['felhasznalo'])) continue; ?>
                <a href="index.php?page=<?= $key ?>"><?= $value ?></a>
            <?php endforeach; ?>
            <?php if (!isset($_SESSION['felhasznalo'])): ?>
                <a href="index.php?page=belep">Belépés</a>
                <div><h2>Nincs bejelentkezve</h2></div>
            <?php else: ?>
                <a href="index.php?page=kilep">Kilépés</a>
                 <div><h2>Be van jelentkezve</h2></div>
            <?php endif; ?>
            </div>
    </nav>
    <?php if (isset($_SESSION['felhasznalo'])): ?>
        <p class="user-info"> Bejelentkezett: <?= $_SESSION['felhasznalo']['teljes_nev'] ?> (<?= $_SESSION['felhasznalo']['felhasznalo_nev'] ?>)</p>
    <?php endif; ?>
</header>