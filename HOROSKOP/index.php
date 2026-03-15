<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Horoskop & Weton Jawa</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Aplikasi Cek Horoskop & Weton</h1>
<p>Masukkan tanggal lahir anda</p>

<form method="post">

<input type="date" name="tgl" required>

<br><br>

<button type="submit">Cek Sekarang</button>

</form>

<?php

if(isset($_POST['tgl'])){

$tanggal=$_POST['tgl'];

$tgl=date("d",strtotime($tanggal));
$bln=date("m",strtotime($tanggal));

# ZODIAC
$zodiac="";
$gambar_zodiac="";

if(($tgl>=21 && $bln==3)||($tgl<=19 && $bln==4)){
$zodiac="Aries";
$gambar_zodiac="aries.png";
}

elseif(($tgl>=20 && $bln==4)||($tgl<=20 && $bln==5)){
$zodiac="Taurus";
$gambar_zodiac="taurus.png";
}

elseif(($tgl>=21 && $bln==5)||($tgl<=20 && $bln==6)){
$zodiac="Gemini";
$gambar_zodiac="gemini.png";
}

elseif(($tgl>=21 && $bln==6)||($tgl<=22 && $bln==7)){
$zodiac="Cancer";
$gambar_zodiac="cancer.png";
}

elseif(($tgl>=23 && $bln==7)||($tgl<=22 && $bln==8)){
$zodiac="Leo";
$gambar_zodiac="leo.png";
}

elseif(($tgl>=23 && $bln==8)||($tgl<=22 && $bln==9)){
$zodiac="Virgo";
$gambar_zodiac="virgo.png";
}

elseif(($tgl>=23 && $bln==9)||($tgl<=22 && $bln==10)){
$zodiac="Libra";
$gambar_zodiac="libra.png";
}

elseif(($tgl>=23 && $bln==10)||($tgl<=21 && $bln==11)){
$zodiac="Scorpio";
$gambar_zodiac="scorpio.png";
}

elseif(($tgl>=22 && $bln==11)||($tgl<=21 && $bln==12)){
$zodiac="Sagittarius";
$gambar_zodiac="sagittarius.png";
}

elseif(($tgl>=22 && $bln==12)||($tgl<=19 && $bln==1)){
$zodiac="Capricorn";
$gambar_zodiac="capricorn.png";
}

elseif(($tgl>=20 && $bln==1)||($tgl<=18 && $bln==2)){
$zodiac="Aquarius";
$gambar_zodiac="aquarius.png";
}

else{
$zodiac="Pisces";
$gambar_zodiac="pisces.png";
}

# HARI JAWA

$hari=array("minggu","senin","selasa","rabu","kamis","jumat","sabtu");

$hari_jawa=$hari[date("w",strtotime($tanggal))];

# PASARAN

$pasaran=array("legi","pahing","pon","wage","kliwon");

$selisih=(strtotime($tanggal)-strtotime("1938-01-01"))/86400;

$pasaran_jawa=$pasaran[$selisih%5];

echo "<div class='hasil'>";

echo "<h2>Hasil Perhitungan</h2>";

echo "<h3>Zodiac Anda</h3>";
echo "<img src='img/$gambar_zodiac'>";
echo "<p>$zodiac</p>";

echo "<h3>Hari Jawa</h3>";
echo "<img src='img/$hari_jawa.png'>";
echo "<p>$hari_jawa</p>";

echo "<h3>Pasaran Jawa</h3>";
echo "<img src='img/$pasaran_jawa.png'>";
echo "<p>$pasaran_jawa</p>";

echo "<h3>Weton</h3>";
echo "<p><b>$hari_jawa $pasaran_jawa</b></p>";

echo "</div>";

}

?>

</div>

</body>
</html>