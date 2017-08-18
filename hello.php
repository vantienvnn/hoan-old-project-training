<?php
// Function factorial calculator
function factorial($n)
{
    if( $n == 0 || $n ==1 ) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
// Calculating n! with n = 6
echo factorial(6);
