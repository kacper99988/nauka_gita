<?php
function srednia($tablica) {
    $suma = array_sum($tablica);
    $ilosc = count($tablica);
    return $ilosc ? $suma / $ilosc : 0;
}

function srednia_wazona($tablica, $wagi) {
    $suma_wazona = 0;
    $suma_wag = array_sum($wagi);
    foreach($tablica as $i => $wartosc) {
        $suma_wazona += $wartosc * $wagi[$i];
    }
    return $suma_wag ? $suma_wazona / $suma_wag : 0;
}
?>
