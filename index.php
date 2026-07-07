<?php
// HIT COUNTER
$fileCounter = "counter_sport.txt";

if(!file_exists($fileCounter)){
    file_put_contents($fileCounter,"0");
}

$counter = (int)file_get_contents($fileCounter);
$counter++;
file_put_contents($fileCounter,$counter);

// FILE BOOKING
$pesan="";

if(isset($_POST['booking'])){

    $nama=$_POST['nama'];
    $wa=$_POST['wa'];
    $lapangan=$_POST['lapangan'];
    $durasi=$_POST['durasi'];

    $data=date("d-m-Y H:i:s").
    " | ".$nama.
    " | ".$wa.
    " | ".$lapangan.
    " | ".$durasi." Jam\n";

    file_put_contents("booking_lapangan.txt",$data,FILE_APPEND);

    $pesan="Reservasi berhasil disimpan.";
}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Sportify</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<header>
<h1>SPORTIFY</h1>
<p>Reservasi Lapangan Olahraga</p>
</header>

<section>

<h2>Katalog Lapangan</h2>

<div class="container">

<div class="card">
<img src="img/futsal.jpg">
<h3>Futsal</h3>
<p>Lantai Vinyl</p>
<p>Rp100.000/Jam</p>
</div>

<div class="card">
<img src="img/badminton.jpg">
<h3>Badminton</h3>
<p>Lantai Karpet</p>
<p>Rp60.000/Jam</p>
</div>

<div class="card">
<img src="img/basket.jpg">
<h3>Basket</h3>
<p>Lantai Kayu</p>
<p>Rp120.000/Jam</p>
</div>

</div>

</section>

<section>

<h2>Reservasi</h2>

<form method="POST" onsubmit="return validasi()">

<label>Nama Pemesan</label>

<input placeholder="Masukkan nama" type="text" name="nama" id="nama">

<div class="error" id="errNama"></div>

<label>Nomor WhatsApp</label>

<input placeholder="Masukkan nomor wa" type="text" name="wa" id="wa">

<div class="error" id="errWA"></div>

<label>Pilih Lapangan</label>

<select name="lapangan">

<option value="" selected disabled>---Pilih Lapangan---</option>

<option>Futsal</option>

<option>Badminton</option>

<option>Basket</option>

</select>

<label>Durasi (Jam)</label>

<input type="number" name="durasi" id="durasi">

<div class="error" id="errDurasi"></div>

<br>

<button type="submit" name="booking">Reservasi</button>

</form>

<p class="berhasil"><?php echo $pesan; ?></p>

</section>

<footer>

Jumlah Pengunjung :
<?php echo $counter; ?>

</footer>

<script src="script.js"></script>

</body>

</html>