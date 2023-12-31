<!-- import classes -->
<?php include("../classes/search.class.php"); ?>

<?php
// Create Object
$searchController = new Search($_GET['type'] ?? '');
?>

<!-- Header -->
<?php
// setting custom changes to header
$title = $searchController->getTitle();
$navbarActive = "search";
include("../includes/header.php"); ?>

<!-- Searching -->


<!-- Footer -->
<?php include("../includes/footer.php"); ?>