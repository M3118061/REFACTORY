<?php
echo "<pre><span class='inner-pre' style='font-size:40px;'>";
$pjg_baris = 7;
$pjg_kolom = 7;

for ($baris = 1; $baris <= $pjg_baris; $baris++) {
    for ($kolom = 1; $kolom <= $pjg_kolom; $kolom++) {
        if ($baris == 1 or $pjg_baris == $baris or $baris == $kolom) {
            echo "#";
        } else if ($kolom == 1 or $kolom == $pjg_kolom or $kolom == ($pjg_kolom-$baris)+1) {
            echo "#";
        } else {
            echo " ";
        }
    }
    echo "<br>";
}
echo "</span></pre>";
?>