<?php
$jml_ayam = array ("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", 
 "22", "23", "24", "25", "26", "27", "28", "29", "30");

 for ($i = 30; $i >= 1; $i--) {
    if ($i == 1) {
        echo "Anak ayam turunlah $i mati satu tinggal induknya";
    } else {
        echo "Anak ayam turunlah $i, mati satu tinggal" . ($i - 1) . "</br>";
    }
}
?>