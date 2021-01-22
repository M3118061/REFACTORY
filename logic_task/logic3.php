<?php
echo "<pre><span class = 'inner-pre' style = 'font-size : 40px'>";
$n_baris = 8;
$n_kolom = 8;

for ($baris = 2; $baris <= $n_baris; $baris++)
{
  for ($kolom = 2; $kolom <= $n_kolom; $kolom++)
  {
    if ($baris == 2 or $n_baris == $baris or $baris == $kolom)
    {
      echo "#";
    }
    elseif ($kolom == 2 or $kolom == $n_kolom or $kolom == ($n_kolom - $baris) + 1)
    {
      echo "#";
    }
    else
    {
      echo " ";
    }
  }
  echo "<br>";
}
echo "</pre></span>";
?>