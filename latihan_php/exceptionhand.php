<?php
//error handling function
function customError($errno, $errstr){
  echo "<br>Error : </b> [$errno] $errstr";
}

//set error handler
set_error_handler("customError");

//trigger error
echo($test);

$test = 2;
if ($test>=1){
  trigger_error("value must be 1 or below");
}

?>