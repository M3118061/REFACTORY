<?php
try {
  //perintah yang akan dijalankan
}
catch(Exception $e){
  //perintah yang dijalankan jika error
}
finally {
  //perintah yang pasti ingin dijalankan
}
?>

<?php
try {
  echo "Halo bray! <br>";
  selamatPgi(); #fungsi tidak pernah didefinisikan
}
catch (Exception $error){
  echo "Error : {$error->getMessage()}";
}
?>