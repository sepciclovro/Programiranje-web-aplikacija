<?php
    $poruka = "";
    $klasa_poruke = "";
    $zamisljeni_broj = "";
    $uneseni_broj = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $zamisljeni_broj = rand(1, 9);
        
        
        $uneseni_broj = (int)$_POST['broj'];

        if ($uneseni_broj === $zamisljeni_broj) {
            $poruka = "Pogodak, probaj ponovo!";
            $klasa_poruke = "pogodak";
        } else {
            $poruka = "Krivo, probaj ponovo!";
            $klasa_poruke = "krivo";
        }
    }
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Igra (pogodi broj) - Vježba 5</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        h4 { color: #666; margin-bottom: 5px; }
        label { display: block; margin-bottom: 10px; font-weight: bold; }
        
        input[type="number"] {
            width: 200px;
            padding: 5px;
            border: 1px solid #000;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        
        .pogodak { background-color: #5cb85c; } /* Zelena */
        .krivo { background-color: #d9534f; }   /* Crvena */
        .default { background-color: #f0f0f0; color: #333; border: 1px solid #ccc; }

        .info { margin-top: 15px; color: #777; font-size: 0.9em; }
    </style>
</head>
<body>

    <h4>Igra (pogodi broj)</h4>
    
    <form method="POST" action="">
        <label for="broj">Upiši jedan broj od 1 do 9*</label>
        <input type="number" name="broj" id="broj" min="1" max="9" required value="<?php echo $uneseni_broj; ?>">
        <br>
        
        <button type="submit" class="btn <?php echo $klasa_poruke ? $klasa_poruke : 'default'; ?>">
            <?php echo $poruka ? $poruka : 'Pošalji'; ?>
        </button>
    </form>

    <?php if ($zamisljeni_broj !== ""): ?>
        <div class="info">
            Zamišljeni broj je <?php echo $zamisljeni_broj; ?>
        </div>
    <?php endif; ?>

</body>
</html>