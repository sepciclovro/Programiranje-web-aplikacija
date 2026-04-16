<?php
    $a = "";
    $b = "";
    $c = "";
    $izracunato = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $a = (float)$_POST['vrijednost_a'];
        $b = (float)$_POST['vrijednost_b'];

       
        $c = (3 * $a - $b) / 2;
        $izracunato = true;
    }
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Matematički izračun - Vježba 2-4</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        .container { max-width: 400px; border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        .form-group { margin-bottom: 10px; }
        label { display: inline-block; width: 100px; }
        input[type="number"] { padding: 5px; width: 150px; }
        .result { margin-top: 20px; padding: 10px; background-color: #f4f4f4; border-left: 5px solid #2ecc71; }
        button { padding: 8px 15px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="container">
        <h2>ZADATAK</h2>
        <p>Izračunajte varijablu <strong>c</strong> prema formuli: <strong>c = (3a - b) / 2</strong></p>

        <form method="POST" action="">
            <div class="form-group">
                <label for="vrijednost_a">Vrijednost a:</label>
                <input type="number" step="any" name="vrijednost_a" id="vrijednost_a" value="<?php echo $a; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="vrijednost_b">Vrijednost b:</label>
                <input type="number" step="any" name="vrijednost_b" id="vrijednost_b" value="<?php echo $b; ?>" required>
            </div>

            <button type="submit">Pošalji</button>
        </form>

        <?php if ($izracunato): ?>
            <div class="result">
                <strong>IZLAZ:</strong><br>
                Za a = <?php echo $a; ?> i b = <?php echo $b; ?>, rezultat je:<br>
                <strong>c = <?php echo $c; ?></strong>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>