<?php
$cookie_name = "korisnik_news";
$cookie_value = "Zadnja posjećena kategorija: Tehnologija";

setcookie($cookie_name, $cookie_value, time() + 3600, "/");
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicijalizacija Kolačića - news.php</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .btn { display: inline-block; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px; margin-top: 15px; }
        .btn:hover { background-color: #0056b3; }
        .success-msg { color: green; font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Stranica Vijesti (news.php)</h1>
        <p class="success-msg">Kolačić pod nazivom <strong>"<?php echo $cookie_name; ?>"</strong> je uspješno inicijaliziran/postavljen!</p>
        <p>Sadržaj koji je spremljen: <em>"<?php echo $cookie_value; ?>"</em></p>
        
        <hr>
        <p>Sada možete prijeći na početnu stranicu kako biste provjerili ispis kolačića:</p>
        <a href="index.php" class="btn">Idi na index.php (Ispis)</a>
    </div>

</body>
</html>