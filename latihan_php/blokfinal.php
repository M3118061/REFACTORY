<?php
try {
  #perintah ini menimbulkan error
  echo "8 + 10 = " . (8 + 10) . "<br>";
} catch (Exception $error){
  echo "Oops, sepertinya sistem kamu sedang error <br>";
} finally {
  echo "Aku akan senantiasa dieksekusi <br>";
}
?>