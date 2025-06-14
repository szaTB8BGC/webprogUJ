<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Kapcsolat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Kapcsolat</h1>
    <div class="php">
        <?php
session_start();
include("felul.php");
?>
</header>
<main>
    <h2>Vegye fel velünk a kapcsolatot</h2>
<form method="post" id="contactForm">
            <label for="nev">Név</label><br><br>
    <input type="text" name="nev" placeholder="Vezetéknév Keresztnév" required=> <br>
            <label for="email">Email-cím</label><br><br>
    <input type="text" name="email" placeholder="email@... .com" required><br>
            <label for="uzenet">Üzenet</label><br><br>
    <textarea name="uzenet" placeholder="Üzenet..." required></textarea>
    <button type="submit">Küldés</button>
</form>
</main>
<?php if (!empty($errors)): ?>
<ul>
    <?php foreach ($errors as $e): ?><li><?= $e ?></li><?php endforeach; ?>
</ul>
<?php endif; ?>
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    const email = document.querySelector('input[name=email]').value;
    if (!email.includes('@')) {
        alert('Hibás email!');
        e.preventDefault();
    }
});
</script>
</body>
</html>


