<?php
    $ime = "Lovro";
    $prezime = "Sepčić";
    $godina = date("Y"); 
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dokument - Vježba 2-1</title>
    <style>
        body {
            background-color: #0d1117; /* Tamna pozadina */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            width: 500px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        h1 {
            margin-top: 0;
            color: #1a1a1a;
        }
        p {
            color: #333;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            border: 1px solid #0056b3;
            color: #0056b3;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #f0f7ff;
        }
        .footer {
            margin-top: 30px;
            font-size: 0.8em;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>PHP dokument</h1>
        
        <p>Ovu stranicu izradio/la je <strong><?php echo $ime . " " . $prezime; ?></strong>.</p>
        
        <p>PHP je serverski jezik koji generira HTML ili JSON odgovor prema klijentu.</p>
        
        <a href="https://www.php.net/" class="btn">Saznaj više o PHP-u</a>
        
        <div class="footer">
            © <?php echo $godina; ?> — Demo za PHP
        </div>
    </div>

</body>
</html>