<?php
    $ime = "Lovro";
    $prezime = "Sepčić";
    $naslov = "PHP dokument — vježba 1c";
    $godina = date("Y");
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $naslov; ?></title>
    <style>
        body {
            background-color: #161b22; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            width: 600px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        h1 {
            margin-top: 0;
            color: #0d1117;
            font-size: 2rem;
        }
        p {
            color: #333;
            line-height: 1.5;
            margin-bottom: 15px;
        }
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #58a6ff;
            color: #0969da;
            text-decoration: none;
            border-radius: 6px;
            font-size: 0.9rem;
            transition: 0.2s;
        }
        .btn:hover {
            background-color: #f0f7ff;
            border-color: #0969da;
        }
        .footer {
            margin-top: 25px;
            font-size: 0.85rem;
            color: #6e7681;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1><?php echo $naslov; ?></h1>
        
        <p>Ovu stranicu izradio/la je <strong><?php echo $ime . " " . $prezime; ?></strong>.</p>
        
        <p>Ova stranica nastavlja vježbu 1b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.</p>
        
        <div class="button-group">
            <a href="https://www.php.net/" class="btn" target="_blank">Saznaj više o PHP-u</a>
            <a href="2.1.php" class="btn">Natrag na vježba 1b</a>
        </div>
        
        <div class="footer">
            © <?php echo $godina; ?> — Demo za PHP
        </div>
    </div>

</body>
</html>