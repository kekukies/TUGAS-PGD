<?php
$nama_lengkap = "Keisha Putri Ratri";
$nama_panggilan = "Kei";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 14;
$bulan_lahir = 3;
$tahun_lahir = 2010;
$alamat = "Jl. Genuk Karanglo RT 8 RW 2, Tegalsari, Candisari, Semarang, Jawa Tengah";
$gender = "Perempuan";
$kewarganegaraan = "Indonesia";
$no_wa = "088233073873";
$email = "kekeikie@gmail.com";
$hobi = ["Bernyanyi", "Mendengarkan Musik", "Menonton Film"];
$skills = 85;
$makanan_favorit = ["Mie", "Sate", "Nasi Goreng"];
$minuman_favorit = ["Es Teh", "Matcha", "Jus Alpukat"];
$keinginan_profesi = "Dokter Spesialis Bedah Jantung (aamiin)";
$motto = "Nothing will change if you keep quiet.";

$tanggal_lahir_full = "$tahun_lahir-$bulan_lahir-$tanggal_lahir";
$today = new DateTime();
$birthDate = new DateTime($tanggal_lahir_full);
$umur = $today->diff($birthDate)->y;

$tahun_sekarang = date("Y");
$tahun_10_lagi = $tahun_sekarang + 10;
$umur_10_lagi = $umur + 10;
?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata <?php echo $nama_panggilan; ?></title>

<!-- ICON CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    font-family: Arial;
    background: linear-gradient(to right, #c9b297, #e9acbb);
}
.container{
    width: 900px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
}
img{
    width: 180px;
    height:180px;
    object-fit: cover; 
    border-radius:50%;
}
table{
    border-collapse: collapse;
    width:100%;
}
th,td{
    border:1px solid black;
    padding:8px;
    text-align:center;
}
</style>
</head>

<body>
<div class="container">

<h1><i class="fa-solid fa-user"></i> <?php echo $nama_lengkap; ?></h1>

<img src="foto saya.jpeg">

<p><i class="fa-solid fa-signature"></i> Nama Panggilan: <?php echo $nama_panggilan; ?></p>
<p><i class="fa-solid fa-pray"></i> Agama: <?php echo $agama; ?></p>
<p><i class="fa-solid fa-location-dot"></i> Tempat Lahir: <?php echo $tempat_lahir; ?></p>
<p>Tanggal Lahir: <?php echo "$tanggal_lahir $bulan_lahir $tahun_lahir"; ?></p>
<p>Umur: <?php echo $umur; ?> tahun</p>
<p>Alamat: <?php echo $alamat; ?></p>
<p>Gender: <?php echo $gender; ?></p>
<p>Kewarganegaraan: <?php echo $kewarganegaraan; ?></p>
<p>No WA: <?php echo $no_wa; ?></p>
<p>Email: <?php echo $email; ?></p>

<hr>

<h2>Keinginan 10 Tahun Lagi</h2>
<p>
Hai namaku <?php echo $nama_panggilan; ?>,
saat ini tahun <?php echo $tahun_sekarang; ?>,
aku adalah seorang siswa yang berumur <?php echo $umur; ?> tahun.
10 tahun lagi di tahun <?php echo $tahun_10_lagi; ?>,
di umur <?php echo $umur_10_lagi; ?> tahun
aku adalah <?php echo $keinginan_profesi; ?>.
Aku ingin sukses dan membanggakan orang tua.
Rencana yang akan aku tempuh adalah rajin belajar dan mengembangkan skill.
</p>

<hr>

<h2>Skills Nonton Seharian</h2>
<input type="range" value="<?php echo $skills; ?>" max="100">
<p><?php echo $skills; ?>%</p>

<hr>

<h2>Hobi</h2>
<ol>
<?php
foreach($hobi as $h){
    echo "<li>$h</li>";
}
?>
</ol>

<h2>Makanan Favorit</h2>
<ul style="list-style-type:square;">
<?php
foreach($makanan_favorit as $m){
    echo "<li>$m</li>";
}
?>
</ul>

<h2>Minuman Favorit</h2>
<ol type="A">
<?php
foreach($minuman_favorit as $d){
    echo "<li>$d</li>";
}
?>
</ol>

<hr>

<h2>Riwayat Pendidikan</h2>
<table>
<tr>
<th>Tingkat</th>
<th>Nama Sekolah</th>
<th>Tahun Mulai</th>
<th>Tahun Lulus</th>
</tr>
<tr>
<td>SD</td>
<td>SDN Pleburan 04</td>
<td>2017</td>
<td>2022</td>
</tr>
<tr>
<td>SMP</td>
<td>SMPN 5 Semarang</td>
<td>2022</td>
<td>2025</td>
</tr>
<tr>
<td>SMK</td>
<td>SMKN 8 Semarang</td>
<td>2025</td>
<td>2028</td>
</tr>
</table>

<hr>

<marquee><?php echo $motto; ?></marquee>

<br><br>
<a href="jadwal.php">➡ Lihat Jadwal</a>

</div>
</body>
</html>