<?php 
#hanya satu kondisi positif
echo "Hanya satu kondisi positif: ";
$kemenangan_nekoma = "mengalahkan karasuno";
if ($kemenangan_nekoma == "mengalahkan karasuno") {echo "Nekoma masuk ke babak berikutnya.<br>";}
#hanya satu kondisi negatif 
echo "Hanya satu kondisi negatif: ";
$status_kekalahan_nekoma = "tidak mengalahkan karasuno";
if ($status_kekalahan_nekoma == "tidak mengalahkan karasuno") {echo "Nekoma terisngkir dari turnamen.<br>";}
#dua kondisi
echo "Dua kondisi: ";
$kondisi_umpan_kenma = "memberi umpan yang akurat";
if ($kondisi_umpan_kenma == "memberi umpan yang akurat") {echo "Nekoma melakukan serangan balik yang mematikan.<br>";}
else {echo "Tim akan fokus pada pertahanan (Defense).<br>";} 
#lebih dari dua kondisi
echo "Lebih dari dua kondisi: ";
$kondisi_permainan_tim = "strategi kenma berjalan sempurna";
if ($kondisi_permainan_tim == "strategi kenma berjalan sempurna") {echo "Nekoma akan memenangkan set dengan skor telak.<br>";}
elseif ($kondisi_permainan_tim == "kuroo berhasil melaklukan total defense") {echo "Lawan kesulitan mencetak poin melalui spike.<br>";}
elseif ($kondisi_permainan_tim == "yaku melakukan receive yang sempurna") {echo "Alur serangan tim menjadi sangat stabil.<br>";}
elseif ($kondisi_permainan_tim == "komunikasi tim berjalan lancar") {echo "Tidak ada kesalahan koordinasi di lapangan.<br>";}
elseif ($kondisi_permainan_tim == "semua pemain tampil konsisten") {echo "Pertandingan berada di tangan nekoma.<br>";}
else {echo "Kondisi tim sedang tidak stabil dan perlu time-out segera.<br>";} 
#Di dalam pengkondisian, ada kondisi lainnya (bersarang)
echo "Bersarang: ";
$posisi_di_turnamen = "masuk semi final";
$hasil_pertandingan = "menang" ;
if ($posisi_di_turnamen == "masuk semi final") {
    if ($hasil_pertandingan == "menang") {echo "Masuk ke babak selanjutnya untuk memperebutkan juara satu.<br>";}
    elseif ($hasil_pertandingan == "kalah") {echo "Mereka akan bertanding memperebutkan peringkat ketiga.<br>";}
    else {echo "Hasil pertandingan semifinal tidak valid.<br>";}
}
elseif ($posisi_di_turnamen == "tidak masuk semi final") {
    if ($posisi_di_turnamen == "kalah") {echo "Mereka harus pulang lebih awal.<br>";}
    else {echo "Status kepesertaan tim tidak dikenali.<br>";}
}
else {echo "jenis bunga dan kerusakan tidak dikenali.<br>";}
#Di dalam pengkondisian menggunakan syarat DAN 
echo "Syarat DAN: ";
$performa_kuroo = "melakukan blok yang tepat";
$performa_yaku = "menerima bola dengan baik";
$kondisi_kenma = "memiliki stamina yang cukup";
$strategi_lawan = "mudah terbaca";
if ($performa_kuroo == "melakukan blok yang tepat" && $performa_yaku == "menerima bola dengan baik") {echo "Nekoma mendapatkan poin dari serangan balik cepat.<br>";}
elseif ($kondisi_kenma == "memiliki stamina yang cukup" && $strategi_lawan == "mudah terbaca") { echo "Nekoma mengendalikan ritme permainan sepenuhnya.<br>";} 
else {echo "Tim harus segera menyesuaikan taktik di lapangan.<br>";} 
#Di dalam pengkondisian menggunakaan syarat ATAU
echo "Syarat ATAU: ";
$situasi_skor_nekoma = "ungguh lebih dulu";
$situasi_lawan = "kehilangan fokus";
$kondisi_pemain = "cedera";
$kondisi_mental_pemain = "kelelahan ekstrem";
if ($situasi_skor_nekoma == "unggul lebih dulu" || $situasi_lawan == "kehilangan fokus") { echo "Nekoma memenangkan set dengan mudah.<br>";} 
elseif ($kondisi_pemain == "cedera" || $kondisi_mental_pemain == "kelelahan ekstrim") { echo "Pemain wajib beristirahat dan melakukan pemulihan.<br>";} 
else {echo "Semua pemain harus tetap siaga di bangku cadangan.";} 
?>