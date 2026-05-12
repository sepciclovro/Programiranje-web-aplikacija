<?php
function is_prime($n) {
    if ($n <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

echo "<h2>Prosti brojevi manji od 100:</h2>";
echo "<p>";

$brojac = 0;
for ($j = 1; $j < 100; $j++) {
    if (is_prime($j)) {
        echo $j . " ";
        $brojac++;
    }
}

echo "</p>";
echo "<p>Ukupno pronađeno prostih brojeva: <strong>$brojac</strong></p>";
?>