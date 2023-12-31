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



<!-- Sorting Layout -->
<main class="text-white bg-dark d-flex flex-column row-gap-3 my-2">
    <div class="row m-0">

        <?php $sortController->sortInfoContent() ?>
    </div>
</main>


<!-- Footer -->
<?php include("../includes/footer.php"); ?>