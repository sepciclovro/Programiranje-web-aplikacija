<?php
date_default_timezone_set('Europe/Zagreb');


function ducan($stanje = "otvoren") {
    echo "Ducan je $stanje";
}

$sat = (int)date('G'); 
$dan_u_tjednu = (int)date('N'); 
$danasnji_datum = date('d.m.'); 

$praznici = array("01.01.", "06.01.", "01.05.", "30.05.", "22.06.", "05.08.", "15.08.", "01.11.", "18.11.", "25.12.", "26.12.");

$trenutno_stanje = "zatvoren";

if (!in_array($danasnji_datum, $praznici)) {
    if ($dan_u_tjednu >= 1 && $dan_u_tjednu <= 5) {
        if ($sat >= 8 && $sat < 20) {
            $trenutno_stanje = "otvoren";
        }
    } elseif ($dan_u_tjednu == 6) {
        if ($sat >= 9 && $sat < 14) {
            $trenutno_stanje = "otvoren";
        }
    }
}


echo "<h3>Rezultat vježbe 9:</h3>";

if ($trenutno_stanje == "otvoren") {
    ducan();
} else {
    ducan("zatvoren");
}
?>
