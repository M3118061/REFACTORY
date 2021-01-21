<?php
$php = array();
$php[0] = 'Refactory';
$php[1] = 'Online Course';
$php[2] = 'Refactory Online Course';
$php[2] = $php[1];
$php[1] = $php[0];
echo $php[2];
echo "<br>";
?>

<?php
//operator untuk manipulasi array
$php = array();
$php[0] = 'Refactory';
$php[1] = 'Online Course';
$php[2] = $php[0].' '.$php[1];
echo $php[2];
?>