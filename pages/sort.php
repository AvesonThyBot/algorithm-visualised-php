<!-- Class for web info -->
<?php include("../classes/web-info.class.php"); ?>

<!-- Header -->
<?php
// setting custom changes to header
$title = "Sort - Algorithm";
include("../includes/header.php"); ?>

<!-- Sorting -->
<?php
// include sort class
include "../classes/sort.class.php";
if (isset($_GET["type"])) {
    switch ($_GET["type"]) {
        case 'selection':
            // Code for Selection Sort
            break;
        case 'bubble':
            // Code for Bubble Sort
            break;
        case 'insertion':
            // Code for Insertion Sort
            break;
        case 'merge':
            // Code for Merge Sort
            break;
        case 'quick':
            // Code for Quick Sort
            break;
        case 'counting':
            // Code for Counting Sort
            break;
        case 'bogo':
            // Code for Bogo Sort
            break;
        default:
            // Default code
            break;
    }
}
?>

<!-- Footer -->
<?php include("../includes/footer.php"); ?>