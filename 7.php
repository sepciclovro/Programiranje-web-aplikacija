<?php
    $prosjek = "";
    $konacna_ocjena = "";
    $poruka = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ocjene = [
            'kolokvij1' => (int)$_POST['ocjena1'],
            'kolokvij2' => (int)$_POST['ocjena2']
        ];

        if ($ocjene['kolokvij1'] < 1 || $ocjene['kolokvij1'] > 5 || 
            $ocjene['kolokvij2'] < 1 || $ocjene['kolokvij2'] > 5) {
            $poruka = "Ocjene moraju biti između 1 i 5!";
        } else {
            $prosjek = ($ocjene['kolokvij1'] + $ocjene['kolokvij2']) / 2;

            if ($ocjene['kolokvij1'] == 1 || $ocjene['kolokvij2'] == 1) {
                $konacna_ocjena = 1;
            } else {
                $konacna_ocjena = round($prosjek);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Prosjek ocjena - Vježba 7</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; padding-top: 50px; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 350px; }
        h2 { color: #2c3e50; font-size: 1.2rem; margin-bottom: 20px; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #7f8c8d; }
        input { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #3498db; color: white; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px; }
        button:hover { background: #2980b9; }
        .result { margin-top: 20px; padding: 15px; border-radius: 5px; background: #e8f4fd; color: #2c3e50; }
        .error { color: #e74c3c; font-weight: bold; margin-bottom: 10px; }
    </style>
</head>
<body>

<div class="card">
    <h2>Izračun ocjene iz predmeta</h2>

    <?php if ($poruka): ?>
        <p class="error"><?php echo $poruka; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label>I. kolokvij (1-5):</label>
            <input type="number" name="ocjena1" min="1" max="5" required>
        </div>
        <div class="form-group">
            <label>II. kolokvij (1-5):</label>
            <input type="number" name="ocjena2" min="1" max="5" required>
        </div>
        <button type="submit">Izračunaj</button>
    </form>

    <?php if ($prosjek !== "" && !$poruka): ?>
        <div class="result">
            <p>Prosjek: <strong><?php echo number_format($prosjek, 2); ?></strong></p>
            <p>Konačna ocjena: <strong><?php echo $konacna_ocjena; ?></strong></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>