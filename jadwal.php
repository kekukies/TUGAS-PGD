<?php
$nama_saya = "Keisha," ;
$piket = [
    "Senin" => ["Cindy,", "Shesanata,", "Tsabita,", "Naila,", "Kartika,","Rasya,", "Yusuf,","Habibi."],
    "Selasa" => [$nama_saya,"Shafanira,", "Aurora", "Sila", "Syauqi," , "Nail,", "Wahyu."],
    "Rabu" => ["Anin,", "Shifa,", "Tania," , "Fasya,","Eka,","Dzaky,","Vino."],
    "Kamis" => ["Aida,", "Maharani,","Alyaa,","Denia,","Ravid,","Ibnu,","Tegar."],
    "Jumat" => ["Aqila,", "Alais,", "Gendhis,","Cloudya,","Aziz,","Raka,","Rayhan."]
];

$jadwal = [
    1 => ["MTK","IPAS","PGD","POR","INF"],
    2 => ["MTK","IPAS","PGD","POR","INF"],
    3 => ["SJR","IPAS","PGD","POR","KKA"],
    4 => ["PABP","IPAS","PGD","SJR","KKA"],
    5 => ["PABP","PPS","PGD","BNG","IPAS"],
    6 => ["PABP","PPS","PGD","BNG","IPAS"],
    7 => ["BNG","BJW","GIM","MTK","PGD"],
    8 => ["BNG","BJW","GIM","MTK","PGD"],
    9 => ["BIN","SNM","GIM","BIN"],
    10 => ["BIN","SNM","GIM","BIN"]
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal Mata Pelajaran X PPLG 2</title>
<style>
body{
    font-family:Arial;
    background:#f2f2f2;
}
table{
    border-collapse:collapse;
    width:100%;
    background:white;
}
th,td{
    border:1px solid black;
    padding:8px;
    text-align:center;
}
th{
    background:#d9eaff;
}
.highlight{
    background-color:yellow;
    font-weight:bold;
}
</style>
</head>

<body>

<h2>Jadwal Pelajaran</h2>
<table>
<tr>
<th>Jam</th>
<th>Senin</th>
<th>Selasa</th>
<th>Rabu</th>
<th>Kamis</th>
<th>Jumat</th>
</tr>

<?php
for($i=1;$i<=10;$i++){
    echo "<tr>";
    echo "<td>$i</td>";

    foreach($jadwal[$i] as $mapel){
        echo "<td>$mapel</td>";
    }

    echo "</tr>";
}
?>
</table>

<br><br>

<h2>Jadwal Piket</h2>
<table>
<tr>
<th>Hari</th>
<th>Nama</th>
</tr>

<?php
foreach($piket as $hari => $nama){
    echo "<tr>";
    echo "<td>$hari</td>";
    echo "<td>";

    foreach($nama as $orang){
        if($orang == $nama_saya){
            echo "<span class='highlight'>$orang</span> ";
        } else {
            echo "$orang ";
        }
    }

    echo "</td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="biodata.php">⬅ Kembali ke Biodata</a>

</body>
</html>