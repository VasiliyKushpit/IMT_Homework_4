<?php
function charge($num1, $num2){

 if($num2 == 1){
     return $num1;
 }
    return charge($num1, $num2-1) * $num1;
}

$randNum1 = rand(2, 10);
$randCharge2 = rand(2, 10);

echo "$randNum1, $randCharge2.  ";

echo charge($randNum1, $randCharge2);
?>