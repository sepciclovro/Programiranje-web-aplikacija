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
        .cookie-box { background-color: #e2f0d9; padding: 15px; border-left: 5px solid #28a745; margin: 15px 0; }
        .warning-box { background-color: #fce4d6; padding: 15px; border-left: 5px solid #c65911; margin: 15px 0; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Početna Stranica (index.php)</h1>
        <p>Dobrodošli na portal. Ispod se nalazi provjera i prikaz vašeg kolačića:</p>

        <?php
        $cookie_name = "korisnik_news";

        if(isset($_COOKIE[$cookie_name])) {
            echo '<div class="cookie-box">';
            echo '<h3>Kolačić je pronađen!</h3>';
            echo '<p><strong>Naziv kolačića:</strong> ' . htmlspecialchars($cookie_name) . '</p>';
            echo '<p><strong>Spremljena vrijednost:</strong> ' . htmlspecialchars($_COOKIE[$cookie_name]) . '</p>';
            echo '</div>';
        } else {
            echo '<div class="warning-box">';
            echo '<h3>Kolačić nije postavljen!</h3>';
            echo '<p>Molimo vas da prvo posjetite stranicu za inicijalizaciju kako bi se kolačić kreirao.</p>';
            echo '</div>';
        }
        ?>

        <hr>
        <p>Želite li ponovno postaviti ili ažurirati kolačić?</p>
        <a href="news.php" class="btn">Idi na news.php (Inicijalizacija)</a>
    </div>

</body>
</html>