<!DOCTYPE html>
<html>
<head>
    <title>Belépés/Regisztráció </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body> 
<header> <h1>Belépés/Regisztráció</h1>
    <div class="php">
        <?php
        session_start();
        include("felul.php");
        ?>
    </div>
    <?php if (!empty($msg)) : ?>
    <div class="message"><?= $msg ?></div>
<?php endif; ?>
<?php if (!empty($error)) : ?>
    <div class="message"><?= $error ?></div>
<?php endif; ?>

</header>
<main><h2>Jelentkezz be,<br>vagy Regisztrálj</h2>

<form method="post">
        <label for="felhasznalo_nev">Felhasználónév</label><br><br>
    <input type="text" name="felhasznalo_nev" placeholder="KisPista123" required><br>
        <label for="jelszo">Jelszó</label><br><br>
    <input type="password" name="jelszo" placeholder="Xx123456xX" required>
            <button name="belepes" type="submit">Belépés</button> <br><br>
        <label for="vezeteknev">Vezetéknév(csak regisztrációhoz)</label><br><br>
    <input type="text" name="vezeteknev" placeholder="Kis"><br>
        <label for="keresztnev">Keresztnév(csak regisztrációhoz)</label><br><br>
    <input type="text" name="keresztnev" placeholder="Pista">
           <button name="regisztracio" type="submit">Regisztráció</button>
</form>
</main>
</body>
</html>






