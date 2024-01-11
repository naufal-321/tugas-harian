<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Menghitung Pembelian Produk</title>
    <style>
        .proses {
            color: red;
        }

        .sudah-bayar {
            color: green;
        }
    </style>
</head>
<body>

<?php
// Inisialisasi variabel
$namaBarang = "Printer Jet";
$kodeBarang = "p001";
$kategori = "Elektronik";
$hargaBarang = 80000; // Harga per unit
$jumlahBarang = 3;
$status = "proses";

// Menghitung total harga
$totalHarga = $hargaBarang * $jumlahBarang;

// Menghitung diskon jika harga barang > 100000
if ($hargaBarang > 100000) {
    $diskon = 50000;
    $totalHarga -= $diskon;
} else {
    $diskon = 0;
}

?>

<h2>==== Program Menghitung Pembelian Produk ====</h2>
<p>Nama Barang : <?php echo $namaBarang; ?></p>
<p>Kode Barang : <?php echo $kodeBarang; ?></p>
<p>Kategori : <?php echo $kategori; ?></p>
<p>Harga Barang : Rp <?php echo number_format($hargaBarang, 0, ',', '.'); ?></p>
<p>Jumlah Barang : <?php echo $jumlahBarang; ?></p>
<p>Total Harga : Rp <?php echo number_format($totalHarga, 0, ',', '.'); ?></p>
<p>Status : <span class='<?php echo $status; ?>'><?php echo ucfirst($status); ?></span></p>

</body>
</html>