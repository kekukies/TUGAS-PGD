<?php 
#HASIL PENGERJAAN KELOMPOK 10 MILIK KELOMPOK 10
#KEISHA PUTRI RATRI 17 DAN ALAIS LUTFI NAFISAH BILQIS 2
#hanya satu kondisi positif
echo "Hanya satu kondisi positif: ";
$kondisi_menyiram_bunga = "setiap hari";
if ($kondisi_menyiram_bunga == "setiap hari") {echo "Bunga tumbuh indah.<br>";}
#hanya satu kondisi negatif 
echo "Hanya satu kondisi negatif: ";
$kondisi_bunga = "tidak mendapatkan sinar matahari";
if ($kondisi_bunga == "tidak mendapatkan sinar matahari") {echo "Bunga layu.<br>";}
#dua kondisi
echo "Dua kondisi: ";
$tanah = "subur";
if ($tanah == "subur") {echo "Bunga tumbuh dengan baik.<br>";}
else {echo "Bunga susah tumbuh.<br>";}
#lebih dari dua kondisi
echo "Lebih dari dua kondisi: ";
$kondisi_pupuk = "bagus";
$pemberian_pupuk = "setiap hari";
//kondisi biji :3
if ($kondisi_pupuk == "bagus") {echo "Biji akan tumbuh cepat.<br>";}
elseif ($kondisi_pupuk == "tidak bagus") {echo "Biji akan tumbuh lambat.<br>";}
//kondisi bunga :p
if ($pemberian_pupuk == "setiap hari") {echo "Bunga tumbuh sehat.<br>";}
elseif ($pemberian_pupuk == "tidak diberi") {echo "Bunga layu.<br>";}
elseif ($kondisi_pupuk == "buruk") {echo "Daun akan tumbuh lambat.<br>";}
else {echo "Kondisi pupuk tidak jelas, perlu di cek secara manual.<br>";}
#Di dalam pengkondisian, ada kondisi lainnya (bersarang)
echo "Bersarang: ";
$jenis = "bunga potong";
$kondisi_kerusakan = "ringan" ;
if ($jenis == "bunga potong") {
    if ($kondisi_kerusakan == "berat") {echo "Bunga harus dipotong bagian yang layu dan segera direndam di air.<br>";}
    elseif ($kondisi_kerusakan == "sedang") {echo "Bagian batang bunga harus dipotong sedikit dan diganti airnya.<br>";}
    elseif ($kondisi_kerusakan == "ringan") {echo "Bunga cukup dirapikan dan diganti airnya.<br>";}
    else {echo "Kondisi bunga potong tidak terdeteksi.<br>";}
}
elseif ($jenis == "bunga pot") {
    if ($kondisi_kerusakan == "berat") {echo "Bunga harus dipotong dan diganti media tanamnya secara teratur.<br>";}
    elseif ($kondisi_kerusakan == "sedang") {echo "Bunga perlu disiram dan diberi pupuk secara teratur.<br>";}
    elseif ($kondisi_kerusakan == "ringan") {echo "Bunga cukup disiram.<br>";}
    else {echo "Bunga pot baik baik saja.<br>";}
}
else {echo "Jenis bunga dan kerusakan tidak dikenali.<br>";}
#Di dalam pengkondisian menggunakan syarat DAN 
echo "Syarat DAN: ";
$suasana = "formal";
$penerima = "pria";
if ($suasana == "formal" && $penerima == "pria") {echo "Rekomendasi: bunga mawar merah atau bunga lily agar telihat elegan dan berkelas.<br>";}
elseif ($suasana == "formal" && $penerima == "wanita") {echo "Rekomendasi: bunga anggrek atau mawar dengan rangkaian rapi agar terlihat profesional.<br>";}
elseif ($suasana == "santai" && $penerima == "pria") {echo "Rekomendasi: bunga matahari atau bunga sederhana yang memberi kesan cerah.<br>";}
elseif ($suasana == "santai" && $penerima == "wanita") {echo "Rekomendasi: bunga daisy atau bunga warna-warni yang terlihat fresh dan menyenangkan.<br>";}
else {echo "Rekomendasi bunga dapat disesuaikan dengan kebutuhan dan keinginan penerima.<br>";}
#Di dalam pengkondisian menggunakaan syarat ATAU
echo "Syarat ATAU: ";
$tempat = "formal";
$kegiatan = "wisuda";
if ($tempat == "formal" && ($kegiatan == "pernikahan" || $kegiatan == "wisuda" || $kegiatan == "acara resmi")) {echo "Pilih bunga elegan seperti mawar atau lily.<br>";} 
elseif ($tempat != "formal" && ($kegiatan == "jalan-jalan" || $kegiatan == "berkumpul" || $kegiatan == "santai")) {echo "Pilih bunga cerah seperti bunga matahari atau daisy.<br>";}
else {echo "Pilih bunga sesuai kebutuhan dan suasana yang diinginkan.";}
?>