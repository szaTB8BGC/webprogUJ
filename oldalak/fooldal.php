<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Főoldal</title>
<link rel="stylesheet" href="styles.css"> <!--, sans-serif;-->
</head>
<body>
    <header>
    <h1>Főoldal</h1>
    <div class="php">
        <?php
session_start();
include("felul.php");
?>
</div>
</header>
<div><h2>Hogyan szeressünk egy macskát!</h2></div>
<div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/87p53rAD7Sk?si=J5-pPxXZG4rATskD" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
    </iframe> <br>
    <video width="560" height= "315" controls>
  <source src="received_210010698799748.mp4" type="video/mp4">
</video>
<div><h2>Központunk itt található!!!!</h2></div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9835.537380884303!2d63.436856334605764!3d-19.72168667428055!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x23e3ad2075c1077f%3A0xf5e0ce4f475b74a4!2sCath%C3%A9drale%20St%20Gabriel!5e0!3m2!1shu!2shu!4v1749920028787!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>

<!--edit-->
