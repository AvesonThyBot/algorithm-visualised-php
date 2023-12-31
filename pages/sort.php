<!-- import classes -->
<?php include("../classes/web-info.class.php");
include("../classes/sort.class.php"); ?>

<?php
// Create object
$sortController = new Sort($_GET['type'] ?? '');
?>

<!-- Header -->

<?php
// setting custom changes to header
if (strlen(ucfirst($sortController->getCurrentType())) == 0) {
    $title = "Sorts - Algorithm";
} else {
    $title = ucfirst($sortController->getCurrentType()) . " - Sort";
}
$navbarActive = "sorts";
include("../includes/header.php"); ?>

<!-- Sorting -->


<!-- Footer -->
<?php include("../includes/footer.php"); ?>