<?php
$hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$tanggal = range(1, 31);
$bulan = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des");
$tahun = array(2024, 2025, 2026);

for ($i = 0; $i < count($hari); $i++) {
    if ($hari[$i] == "Senin") {
        echo $hari[$i] . ", ";
        break;
    }
}

foreach ($tanggal as $tgl) {
    if ($tgl == 10) {
        echo $tgl . " - ";
        break;
    }
}

$index = 0;
while ($index < count($bulan)) {
    if ($bulan[$index] == "Mar") {
        echo $bulan[$index] . " - ";
        break;
    }
    $index++;
}

$indexTahun = 0;
do {
    if ($tahun[$indexTahun] == 2025) {
        echo $tahun[$indexTahun];
        break;
    }
    $indexTahun++;
} while ($indexTahun < count($tahun));
?>