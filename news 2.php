<?php
session_start();

$_SESSION['korisnik_session'] = "Zadnja posjećena kategorija: Sport i Zdravlje";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicijalizacija Sjednice - news.php</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .btn { display: inline-block; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px; margin-top: 15px; }
        .btn:hover { background-color: #0056b3; }
        .success-msg { color: #004085; font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Stranica Vijesti (news.php)</h1>
        <p class="success-msg">Sjednica (Session) je uspješno pokrenuta i podaci su spremljeni!</p>
        
        <hr>
        <p>Sada možete prijeći na početnu stranicu kako biste provjerili ispis iz sjednice:</p>
        <a href="index.php" class="btn">Idi na index.php (Ispis sjednice)</a>
    </div>

</body>
</html>