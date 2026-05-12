<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 10 - Brojanje riječi</title>
</head>
<body>

    <h2>Zadatak str_word_count</h2>
    <p>U zadatku se traži da se ispiše koliko je riječi u rečenici. Koristite naredbu <code>str_word_count</code>.</p>

    <form action="" method="post">
        <label for="niz">Ulazni niz:</label><br>
        <input type="text" id="niz" name="ulazni_niz" style="width: 400px;" required>
        <br><br>
        <input type="submit" value="ispiši broj riječi">
    </form>

    <?php
    if (isset($_POST['ulazni_niz'])) {
        $tekst = $_POST['ulazni_niz'];
        
        $broj_rijeci = str_word_count($tekst);

        echo "<br>";
        echo "<p><strong>ulazni niz:</strong> " . htmlspecialchars($tekst) . " <strong>sadrži $broj_rijeci riječi.</strong></p>";
    }
    ?>

</body>
</html>