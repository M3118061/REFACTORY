<?php

$nomor		= 264321;
$split		= str_split($nomor);
$jml_nomor	= count($split);

for ($n = 0; $n <= $jml_nomor - 1; $n++){
	echo $split[$n];
	
	for ($m = 0; $m < $jml_nomor - $n - 1; $m++){
		echo '0';
	}
	echo '<br/>';
}

?>