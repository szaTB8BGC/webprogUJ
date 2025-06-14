<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Képek</title>
    <link rel="stylesheet" href="styles.css">
<body>
<header>
<h1>Képek</h1>
<div class="php">
        <?php
session_start();
include("felul.php");
$kikep="Csak bejelentkezett felhasználók tölthetnek fel képeket.";
$bekep="Képeink alatt töthetti fel saját képeit!!";
if (!isset($_SESSION['felhasznalo'])) echo "<header>$kikep</header>";
else echo "<header>$bekep</header>";
?>
</header>
<main>
    <h2>Képeink</h2>
<div class="kepek">
<img src="imgs_vids/macska3.jpg" width="200">
<img src="imgs_vids/macska4.jpg" width="200">
</div>
</main>

<?php if (isset($_SESSION['felhasznalo'])): ?>
<form method="post" enctype="multipart/form-data">
    <label for="image">Kép feltöltése:</label><br><br>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Feltöltés</button>
</form>
<?php endif; ?>

</body>
</html>
