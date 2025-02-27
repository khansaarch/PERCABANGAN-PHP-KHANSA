<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 1 - Percabangan PHP 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            color: #333;
            text-align: center;
        }
        .box {
            background: #eef;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 5px solid #36c;
        }
        .jadwal {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .jadwal th, .jadwal td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .jadwal th {
            background-color: #36c;
            color: white;
        }
    </style>
</head>
<body>
<div class="box">
            <h3>Skenario Ketiga: Jadwal Harian Andi</h3>
            <table class="jadwal">
                <tr>
                    <th>Waktu</th>
                    <th>Kegiatan</th>
                </tr>
    <?php
    $jadwal = [
        "15:30" => "Pulang Sekolah",
        "15:45" => "Tiba di Rumah",
        "15:45-15:55" => "Mandi",
        "15:55-16:25" => "Mengaji",
        "16:25-18:15" => "Mengerjakan Tugas Sekolah (Jika tidak ada, mengobrol dengan keluarga)",
        "18:15-18:45" => "Menghafalkan dialog festival kesenian",
        "18:45-18:50" => "Membeli bumbu masakan",
        "18:50-19:00" => "Sholat Maghrib",
        "19:00-19:15" => "Makan malam",
        "19:15-19:25" => "Sholat Isya",
        "19:25-19:55" => "Chatting dengan Raya",
        "19:55-20:25" => "Mengobrol bersama keluarga",
        "20:25-22:00" => "Waktu luang (Tidak ada kegiatan)",
        "22:00-04:00" => "Tidur",
        "04:00" => "Bangun",
    ];
    foreach ($jadwal as $waktu => $aktivitas) {
        echo "<tr><td><b>$waktu</b></td><td>$aktivitas</td></tr>";
    }
?>
</table>
<div>
<p><b>Nama :</b> Khansa Putri Umayadi</p>
<p><b>Nama Teman Diskusi :</b> Sukma Yulia Wati </p>
</div>
</body>
</html>