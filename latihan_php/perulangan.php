<?php
//switch
$favourite_site = 'Code';

switch ($favourite_site){
  case 'Bisnis':
    echo "My facourite site is bussiness.tutplus.com!";
    break;
  case 'Code':
    echo "My facourite site is code.tutplus.com!";
    break;
  case 'Design':
    echo "My facourite site is design.tutplus.com!";
    break;
  case 'Music':
    echo "My facourite site is music.tutplus.com!";
    break;
  default:
    echo "i like everything at tutplus.com!";
}
echo "<br>";

//while (digunakan untuk perulangan sampai kodisi salah tidak diketahui brp kali perulangan)
$max = 0;
echo $i = 0;
echo ",";
echo $j = 1;
echo ",";
$result = 0;

while ($max < 10){
  $result = $i + $j;
  $i = $j;
  $j = $result;

  $max = $max + 1;
  echo $result;
  echo ",";
}

//do while diperiksa pada akhir perintah
//$handle = fopen("file.txt","r");
//if ($handle){
//  do{
//    $line = fgets($handle);
//  }
//  while ($line !== false);
//}
//fclose($handle);
echo "<br>";

//for
for ($a=1; $a<=10; ++$a)
{
  echo sprintf("The square of %d is %d,</br>",$a, $a*$a);
}
echo "<br/>";

//foreach
$fruits = array('aple','banana','orange','grape');
foreach ($fruits as $fruit)
{
  echo $fruit;
  echo "<br/>";
}
echo "<br/>";
$employe = array('name' => 'John Smith','age' => 30, 'profession' => 'Dosen');
foreach ($employe as $key => $value)
{
  echo sprintf("%s: %s </br>",$key,$value);
}
?>