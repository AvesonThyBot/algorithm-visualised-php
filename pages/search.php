<!-- import classes -->
<?php include("../classes/web-info.class.php");
include("../classes/search.class.php"); ?>

<?php
// Create Object
$searchController = new Search($_GET['type'] ?? '');
?>

<!-- Header -->
<?php
// setting custom changes to header
if (strlen(ucfirst($searchController->getCurrentType())) == 0) {
    $title = "Searchs - Algorithm";
} else {
    $title = ucfirst($searchController->getCurrentType()) . " - Search";
}
$navbarActive = "search";
include("../includes/header.php"); ?>

<!-- Searching -->


<!-- Footer -->
<?php include("../includes/footer.php"); ?>