<?php
    $rezultat = "";
    $broj1 = "";
    $broj2 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $broj1 = (float)$_POST['broj1'];
        $broj2 = (float)$_POST['broj2'];
        $operacija = $_POST['operacija'];

        switch ($operacija) {
            case '+':
                $rezultat = $broj1 + $broj2;
                break;
            case '-':
                $rezultat = $broj1 - $broj2;
                break;
            case '*':
                $rezultat = $broj1 * $broj2;
                break;
            case '/':
                if ($broj2 != 0) {
                    $rezultat = $broj1 / $broj2;
                } else {
                    $rezultat = "Dijeljenje s nulom nije dozvoljeno";
                }
                break;
            default:
                $rezultat = "Nepoznata operacija";
        }
    }
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator - Vježba 6</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        .calc-box { width: 350px; }
        .input-group { margin-bottom: 15px; display: flex; justify-content: space-between; align-items: center; }
        input[type="number"] { width: 150px; padding: 5px; }
        .btn-group { display: flex; gap: 5px; margin-top: 15px; }
        button { 
            width: 40px; 
            height: 40px; 
            cursor: pointer; 
            background: #f0f0f0; 
            border: 1px solid #ccc; 
            border-radius: 4px;
        }
        button:hover { background: #e0e0e0; }
        .result-label { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>

    <div class="calc-box">
        <p>Kalkulator (Switch naredba)</p>
        
        <form method="POST" action="">
            <div class="input-group">
                <label>Upiši prvi broj *</label>
                <input type="number" step="any" name="broj1" value="<?php echo $broj1; ?>" required>
            </div>
            
            <div class="input-group">
                <label>Upiši drugi broj *</label>
                <input type="number" step="any" name="broj2" value="<?php echo $broj2; ?>" required>
            </div>

            <p class="result-label">Rezultat: <?php echo $rezultat; ?></p>

            <div class="btn-group">
                <button type="submit" name="operacija" value="+">+</button>
                <button type="submit" name="operacija" value="-">-</button>
                <button type="submit" name="operacija" value="*">*</button>
                <button type="submit" name="operacija" value="/">/</button>
            </div>
        </form>
    </div>

</body>
</html>