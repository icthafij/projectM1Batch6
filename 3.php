<?php

echo "Enter units consumed: ";
$units_consumed = (int) fgets(STDIN);  


$total_bill = 0;


if ($units_consumed <= 100) {
    $total_bill = $units_consumed * 5;  
} elseif ($units_consumed <= 200) {
    $total_bill = (100 * 5) + (($units_consumed - 100) * 10);  
} else {
    $total_bill = (100 * 5) + (100 * 10) + (($units_consumed - 200) * 15);  
}


echo "Total bill for $units_consumed units is: \$" . $total_bill;
?>
