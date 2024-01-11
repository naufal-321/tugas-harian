<?php

// Input nilai
$nama = "Naufal Putra Ramadhan";
$kelas = "X RPL 2";
$nilai_harian = 28.5;
$nilai_uts = 24;
$nilai_uas = 34;

// Hitung nilai akhir
$nilai_harian = $nilai_harian * 30 / 100;
$nilai_uts = $nilai_uts * 30 / 100;
$nilai_uas = $nilai_uas * 40 / 100;

$nilai_akhir = $nilai_harian + $nilai_uts + $nilai_uas;

// Tentukan predikat
if ($nilai_akhir >= 90 && $nilai_akhir <= 100) {
    $predikat = "A+";
} elseif ($nilai_akhir >= 85 && $nilai_akhir <= 89) {
    $predikat = "A";
} elseif ($nilai_akhir >= 80 && $nilai_akhir <= 84) {
    $predikat = "B+";
} elseif ($nilai_akhir >= 76 && $nilai_akhir <= 79) {
    $predikat = "B";
} elseif ($nilai_akhir >= 60 && $nilai_akhir <= 75) {
    $predikat = "C";
} elseif ($nilai_akhir >= 40 && $nilai_akhir <= 59) {
    $predikat = "D";
} elseif ($nilai_akhir >= 0 && $nilai_akhir <= 39) {
    $predikat = "E";
} else {
    $predikat = "Tidak mendapatkan predikat";
}

// Tampilkan output
echo "==== Program Menghitung Nilai Akhir ====\n<br/>";
echo "Nama : $nama\n<br/>";
echo "Kelas : $kelas\n<br/>";
echo "Nilai Harian  : $nilai_harian\n<br/>";
echo "Nilai UTS : $nilai_uts\n<br/>";
echo "Nilai UAS : $nilai_uas\n<br/>";
echo "Nilai Akhir : $nilai_akhir\n<br/>";
echo "Predikat Nilai : $predikat\n<br/>";
echo "===============================\n";
?>