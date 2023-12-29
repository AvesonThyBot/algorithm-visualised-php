<!-- Class for web info -->
<?php include("../classes/web-info.class.php"); ?>

<!-- Header -->
<?php
$title = "Search - Algorithm";
include("../includes/header.php"); ?>

<!-- Searching -->
<?php
// include search class
include "../classes/search.class.php";
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
?>

<!-- Footer -->
<?php include("../includes/footer.php"); ?>