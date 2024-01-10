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

<!-- Main Sorting Info -->
<?php $sortController->contentDiplay() ?>

<!-- Specific sort -->
<main class="text-white bg-dark d-flex flex-column row-gap-3 my-2">
        <div class="row m-0">
            <?php 
            // Loop each sort type info
            $sortController->sortInfoContent()
           ?>
        </div>
        <h4 class="fw-light text-start fs-5 mx-1"><?php $sortController->getLastUpdate() ?></h4>
</main>

<!-- Footer -->
<?php
$extraScript = "/scripts/app.js";
include("../includes/footer.php"); ?>