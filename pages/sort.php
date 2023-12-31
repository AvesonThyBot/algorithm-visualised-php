<!-- import classes -->
<?php include("../classes/sort.class.php"); ?>

<?php
// Create object
$sortController = new Sort($_GET['type'] ?? '');
?>

<!-- Header -->

<?php
$title = $sortController->getTitle();
$navbarActive = "sorts";
include("../includes/header.php"); ?>

<!-- Sorting -->


<!-- Footer -->
<?php include("../includes/footer.php"); ?>