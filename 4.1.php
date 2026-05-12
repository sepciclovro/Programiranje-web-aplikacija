<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vježba 8 - Odabir vozila</title>
</head>
<body>

    <h2>ZADATAK: Odabir vozila</h2>

    <?php
    // Definiranje polja automobila
    $cars = array("Audi", "BMW", "Renault", "Citroen");

    // Provjera je li forma poslana
    if (isset($_POST['car_selection'])) {
        $selected_car = $_POST['car_selection'];
        echo "<p><strong>Odabrali ste vozilo: $selected_car</strong></p>";
        echo "<hr>";
    }
    ?>

    <form action="" method="post">
        <p>Označi vozilo:</p>
        
        <?php
        // Generiranje radio gumba pomoću foreach petlje
        foreach ($cars as $car) {
            echo '<label>';
            echo '<input type="radio" name="car_selection" value="' . $car . '" required> ' . $car;
            echo '</label><br>';
        }
        ?>
        
        <br>
        <button type="submit" style="background-color: #26b1b6; color: white; border: none; padding: 10px 20px; cursor: pointer;">
            POŠALJI
        </button>
    </form>

</body>
</html>