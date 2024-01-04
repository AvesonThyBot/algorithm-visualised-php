<!-- import classes -->
<?php include("../classes/sort.class.php"); ?>

<?php
// Create object
$sortController = new Sort($_GET['type'] ?? '');
?>

<!-- Header -->
<?php
// setting custom changes to header
$title = $sortController->getTitle();
$navbarActive = "sorts";
include("../includes/header.php"); ?>

<!-- Display content based on Request -->
<?php $sortController->contentDiplay() ?>

<!-- Footer -->
<?php
$extraScript = "/scripts/app.js";
include("../includes/footer.php"); ?>