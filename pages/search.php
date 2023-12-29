<?php
// include the classes
include "../includes/class-autoloader.inc.php";
echo strtolower($_GET["type"]);
if (isset($_GET["type"])) {
    switch (strtolower($_GET["type"])) {
        case 'linear':
            // Code for Linear Search
            break;
        case 'binary':
            // Code for Binary Search
            break;
        case 'ternary':
            // Code for Ternary Search
            break;
        case 'jump':
            // Code for Jump Search
            break;
        case 'interpolation':
            // Code for Interpolation Search
            break;
        case 'exponential':
            // Code for Exponential Search
            break;
        case 'fibonacci':
            // Code for Fibonacci Search
            break;
        default:
            // Default code
            break;
    }
}


/*

Linear Search
Binary Search
Ternary Search
Jump Search
Interpolation Search
Exponential Search
Fibonacci Search

*/
