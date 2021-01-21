<?php
//singe quote
$string1 = 'saya sedang belajar php';
$string2 = 'saya muthia';
$string3 = 'd3 Teknik Informatika';
//echo "$string1 <br/>";

//integer
$umur = 20;
$harga = 45;
//echo "$string2 umur saya $umur tahun <br/>";

//float
$hargajual = 75.555;
$hargabeli = 45.555;
//echo "saya membeli buku dengan harga Rp.$hargajual <br/>";

//bolean
$benar = true;
$salah = false;
//echo "benar = $benar, salah = $salah";

//object
class Sapa{
  var $str;
}
//membuat object pesan
$pesan = new Sapa();
$pesan->str="Hello"; //memberikan pesan untuk properti str pada object pesan
//echo $pesan->str;

//null
$var1 = NULL;
$var2 = null;

//x pertama diberi nilai 2 
$x = 2;
if ($x > 0){
  echo "bisa dibandingkan karena tidak null";
}

//x diberi 0
$x = null;
if ($x > 0){
  echo "tidak bisa dibandingkan karena null";
}

//array
$anggota = array("andi", "anda", "andu");

//numeric array = array yg menggunakan indeks dg angka numeric
$anggota[] = 'melon';
$anggota[] = 'semangka';
$anggota[] = 'apel';

//asosiatif array
$data = array('buah' => 'anggur', 'buah2' => 'mangga', 'buah3' => 'jeruk')

//array multidimensi
$data = array(
  array('anggur','mangga','melon'),
  array('jeruk','nanas','apel'),
  array('jambu','pisang','semangka')
);

?>