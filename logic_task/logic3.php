<?php
echo "<pre><span class = 'inner-pre' style = 'font-size : 25px'>";
$n = 8;
for ($baris = 2; $baris <= $n; $baris++)
{
  for ($kolom = 2; $kolom <= $n; $kolom++)
  {
    if ($baris == 2 or $n == $baris or $baris == $kolom)
    {
      echo " #";
    }
    elseif ($kolom == 2 or $kolom == $n or $kolom == ($n - $baris) + 2)
    {
      echo " #";
    }
    else
    {
      echo "  ";
    }
  }
  echo "<br>";
}
echo "</pre></span>";
?>