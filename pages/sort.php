<!-- import classes -->
<?php include("../classes/web-info.class.php");
include("../classes/sort.class.php"); ?>

<?php
// Create Sort Controller Object
if (isset($_GET["type"])) {
    $sortController = new Sort($_GET["type"]);
} else {
    $sortController = new Sort("null");
}


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