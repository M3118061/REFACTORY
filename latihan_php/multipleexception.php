<?php
$a = 5;
$b = 0;
try {
  if ($b < 1) {
    throw new DivisionByZeroError('variabel $b tidak boleh 0');
  }
  echo $a / $b;
} catch (ArgumentCountError $error){
  echo "ArgumentCountError exception: " . $error->getMessage();
} catch (DivisionByZeroError $error){
  echo "DivisionByZeroError exception: " . $error->getMessage();
} catch (Exception $error){
  echo "Exception: " . $error->getMessage();
}
?>