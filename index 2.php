<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Početna Stranica - index.php</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .btn { display: inline-block; padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; margin-top: 15px; }
        .btn:hover { background-color: #218838; }
        .session-box { background-color: #d1ecf1; padding: 15px; border-left: 5px solid #17a2b8; margin: 15px 0; }
        .warning-box { background-color: #f8d7da; padding: 15px; border-left: 5px solid #dc3545; margin: 15px 0; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Početna Stranica (index.php)</h1>
        <p>Dobrodošli. Ispod se nalazi provjera podataka iz aktivne sjednice:</p>

        <?php
        if(isset($_SESSION['korisnik_session'])) {
            echo '<div class="session-box">';
            echo '<h3>Podaci iz sjednice su pronađeni!</h3>';
            echo '<p><strong>Spremljena vrijednost:</strong> ' . htmlspecialchars($_SESSION['korisnik_session']) . '</p>';
            echo '</div>';
        } else {
            echo '<div class="warning-box">';
            echo '<h3>Sjednica ne sadrži podatke!</h3>';
            echo '<p>Molimo vas da prvo posjetite stranicu za inicijalizaciju kako bi se podaci upisali u sjednicu.</p>';
            echo '</div>';
        }
        ?>

        <hr>
        <p>Želite li ponovno pokrenuti ili ažurirati podatke u sjednici?</p>
        <a href="news.php" class="btn">Idi na news.php (Inicijalizacija sjednice)</a>
    </div>

</body>
</html>