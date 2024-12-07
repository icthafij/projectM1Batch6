<?php

define("CELSIUS_TO_FAHRENHEIT", 1.8);  
define("FAHRENHEIT_TO_CELSIUS", 5/9);  


echo "Enter temperature value: ";
$temperature = (float) readline();  

echo "Enter conversion type (C to F for Celsius to Fahrenheit, F to C for Fahrenheit to Celsius): ";
$conversion_type = strtoupper(readline());  


switch ($conversion_type) {
    case 'C TO F':
        
        $converted_temp = ($temperature * CELSIUS_TO_FAHRENHEIT) + 32;
        echo "$temperature °C is equal to $converted_temp °F\n";
        break;

    case 'F TO C':
        
        $converted_temp = ($temperature - 32) * FAHRENHEIT_TO_CELSIUS;
        echo "$temperature °F is equal to $converted_temp °C\n";
        break;

    default:
        echo "Invalid conversion type. Please enter 'C to F' or 'F to C'.\n";
        break;
}
?>
