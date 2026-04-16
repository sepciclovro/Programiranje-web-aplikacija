<?php
    $ime = "Lovro";
    $prezime = "Sepčić";
    $tema = "dark"; 
    $prikazi_opis = false;
    $odabrana_slika = "code";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
      
        if (isset($_POST['tema'])) {
            $tema = $_POST['tema'];
        }

       
        if (isset($_POST['slika'])) {
            $odabrana_slika = $_POST['slika'];
        }

       
        $prikazi_opis = isset($_POST['prikazi_opis']);
    }

    
    $putanja_do_slike = "";
    if ($odabrana_slika == "code") {
        $putanja_do_slike = "https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=500";
    } else {
        $putanja_do_slike = "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=500";
    }
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>PHP Dokument — vježba 1d</title>
    <style>
        /* Dinamički CSS ovisno o PHP varijabli $tema */
        body {
            background-color: <?php echo ($tema == 'dark') ? '#0d1117' : '#f0f2f5'; ?>;
            color: <?php echo ($tema == 'dark') ? '#ffffff' : '#000000'; ?>;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background-color: <?php echo ($tema == 'dark') ? '#161b22' : '#ffffff'; ?>;
            color: #333; /* Tekst unutar kartice ostaje taman radi čitljivosti na bijelom */
            padding: 30px;
            border-radius: 15px;
            width: 500px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        /* Ako je tema dark, prilagođavamo tekst u kartici da bude bijel */
        <?php if ($tema == 'dark'): ?>
        .card { color: #e6edf3; border: 1px solid #30363d; }
        .card p, .card legend { color: #8b949e; }
        .card h2 { color: #ffffff; }
        <?php endif; ?>

        .img-preview {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        fieldset {
            border: 1px solid #ddd;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-group { display: flex; gap: 10px; margin-top: 20px; }
        
        .btn {
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            border: 1px solid #0969da;
        }

        .btn-primary { background: #0969da; color: white; }
        .btn-outline { background: transparent; color: #0969da; }
    </style>
</head>
<body>

<div class="card">
    <h2>PHP dokument — vježba 1d</h2>
    <p>Ovu stranicu izradio/la je <strong><?php echo "$ime $prezime"; ?></strong>.</p>

    <img src="<?php echo $putanja_do_slike; ?>" class="img-preview" alt="PHP vježba">

    <?php if ($prikazi_opis): ?>
        <p><i>Ova stranica nadograđuje vježbu 1c: biramo temu (dark/light), odabiremo sliku i po želji prikazujemo opis.</i></p>
    <?php endif; ?>

    <hr>

    <form method="POST" action="">
        <fieldset>
            <legend>Odaberi temu</legend>
            <input type="radio" name="tema" value="dark" <?php if($tema == 'dark') echo 'checked'; ?>> Dark
            <input type="radio" name="tema" value="light" <?php if($tema == 'light') echo 'checked'; ?>> Light
        </fieldset>

        <fieldset>
            <legend>Odaberi sliku</legend>
            <label for="slika">Slika:</label>
            <select name="slika" id="slika">
                <option value="code" <?php if($odabrana_slika == 'code') echo 'selected'; ?>>Code (Default)</option>
                <option value="abstract" <?php if($odabrana_slika == 'abstract') echo 'selected'; ?>>Abstract Tech</option>
            </select>
        </fieldset>

        <label>
            <input type="checkbox" name="prikazi_opis" <?php if($prikazi_opis) echo 'checked'; ?>> Prikaži opis
        </label>

        <div class="btn-group">
            <button type="submit" class="btn btn-outline">Primijeni odabir</button>
            <a href="2.2.php" class="btn btn-outline">Natrag na vježba 1c</a>
        </div>
    </form>

    <p style="font-size: 12px; margin-top: 20px; opacity: 0.6;">© 2025 — Demo za PHP</p>
</div>

</body>
</html>