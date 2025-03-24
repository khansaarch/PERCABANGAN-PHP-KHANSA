<?php
// kasus 1 
echo "Date<br>";
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
echo "<hr>";

// kasus 2
echo "Anak ayam turun berkotek<br>";

$jml_ayam = array ("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", 
 "22", "23", "24", "25", "26", "27", "28", "29", "30");

 for ($i = 30; $i >= 1; $i--) {
    if ($i == 1) {
        echo "Anak ayam turunlah $i mati satu tinggal induknya";
    } else {
        echo "Anak ayam turunlah $i, mati satu tinggal" . ($i - 1) . "</br>";
    }
} 

echo "<hr>";

// kasus 3
echo "Mawar milik Sholeh<br>";

// Mawar yang dimiliki si Sholeh
echo "Mawar yang dimiliki Sholeh: <br>";
$countSholeh = 0;
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar ,";
    $countSholeh++;
}
echo "Jumlah mawar yang dimiliki Sholeh: " . $countSholeh . "<br>";

// Mawar yang akan diberikan ke ibunya
echo "Mawar yang akan diberikan ke ibunya: ";
$countIbu = 0;
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "$mawar , ";
    $countIbu++;
}
echo "Jumlah mawar yang akan diberikan ke ibunya: " . $countIbu . "<br>";
echo "<hr>";

//kasus 4
echo "Playlist si Ambyar<br>";

// playlist Ambyar
$ambyarlagu = [
    ["suasana" => "galau", "lagu" => "Mesin Waktu - Budi Doremi"],
    ["suasana" => "bersemangat", "lagu" => "Selamat Pagi - Ran"],
    ["suasana" => "marah", "lagu" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];

foreach ($ambyarlagu as $lagu) {
    echo "Jika Ambyar sedang " . $lagu['suasana'] . ", dia mendengarkan lagu: " . $lagu['lagu'] . "<br>";
}
?>