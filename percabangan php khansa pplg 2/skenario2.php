<html>
<head>
    
</head>
<title>LKPD 1 Percabangan PHP</title>
  <body>
    <h2>Skenario kedua: Waktu</h2>
<?php
                $jam = "18.30";
                if ($jam > "24:00") {
                    echo "$jam = Dunia lain";
                } elseif ($jam >= "00:00" && $jam < "04:00") {
                    echo "$jam = Dini hari";
                } elseif ($jam >= "04:00" && $jam < "10:00") {
                    echo "$jam = Pagi";
                } elseif ($jam >= "10:00" && $jam < "15:00") {
                    echo "$jam = Siang";
                } elseif ($jam >= "15:00" && $jam < "17:30") {
                    echo "$jam = Sore";
                } elseif ($jam >= "17:30" && $jam < "18:30") {
                    echo "$jam = Petang";
                } elseif ($jam >= "18:30" && $jam < "24:00") {
                    echo "$jam = Malam";
                }
            ?>
            </body>
            </html>