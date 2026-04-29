<?php
# KEISHA PUTRI RATRI 17 - X PPLG 2

for ($i = 170; $i >= 0; $i--) {
    if ($i > 5) {
        echo "Krok krok krok krok krok krok krok, anak katak turun rekotok.<br>";
        echo "Anak katak turunlah $i, pergi satu tinggal " . ($i - 1) . "<br><br>";
    } else if ($i == 5) {
        echo "Krok krok krok krok krok krok krok, anak katak tinggal 5.<br>";
        echo "Induk katak berkata: \"LOH?! Anakku kemana? Kenapa tinggal 5? Main kemana mereka? 🐸\"<br><br>";
    } else if ($i > 0) {
        echo "Krok krok krok krok krok krok krok, anak katak bersisa $i 🐸<br>";
    } else {
        echo "Krok krok krok krok krok krok krok, habis semua sisa 0.";
    }
}
?>