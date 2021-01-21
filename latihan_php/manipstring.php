<?php

$nama = 'Muthia'; #tanda petik satu

$pesan = "Selamat datang {$nama}"; #tanda petik dua
$pesan2 = 'Selamat datang {$nama}'; #tanda petik satu

#ketika di echo
echo $pesan . '<br>'; #selamat datang Muthia
echo $pesan2 . '<br>'; #selamat datang {$nama}
echo "<br>";

//dengan titik
$namaDepan = "Amesthi";
$namaBelakang = "Saharani";

$namaLengkap = $namaDepan . ' ' .$namaBelakang;
echo $namaLengkap;
echo "<br>";

//dengan operator
$namaLengkap1 = "Prayoga";
$namaLengkap1 .= " Yuditama";
echo $namaLengkap1;
echo "<br><br>";

$i = 5;
echo "Hasil akhir : " . ($i + 3);
echo "<br><br>";

echo "Baris\nbaru <br>"; #ini hanya bekerja di console tidak di html
echo 'Baris\nbaru <br>'; #ditampilkan apa adanya, \n tidak di replace dg sesuatu
echo "<br>";

echo "Halo\rDunia <br>"; #Halo Dunia
echo 'Halo\rDunia <br>'; #Halo\rDunia
echo "<br>";

echo "<pre>Halo\tMuthia </pre>"; #Halo Dunia
echo '<pre>Halo\tMuthia </pre>'; #Halo\rDunia
echo "<br>";

echo "Katakan \"Tidak pada narkoba!\" <br>"; 
echo 'Katakan \'Tidak pada narkoba!\' <br>'; 

$paragraf = "Bunga mawar, bunga melati, bunga anggrek, bunga bangkai";
echo "<p>{$paragraf}</p>";
echo "Panjang Karakter : " . strlen($paragraf) . "<br>";

?>