<!-- import classes -->
<?php include("classes/index.class.php"); ?>

<!-- Header -->
<?php
// setting custom changes to header
$title = "Home - Algorithm";
$navbarActive = "home";
include("includes/header.php"); ?>

<!-- Main -->
<main class="text-white">
    <?php
    $loadingContent = new LoadContent();

    // Intro Section
    date_default_timezone_set('GMT');
    $loadingContent->getContent("title");

    // Sort Section
    $loadingContent->getContent("sort");

    // Search Section
    $loadingContent->getContent("search");
    ?>
</main>

<!-- Footer -->
<?php
$extraScript = "/scripts/index.js";
include("includes/footer.php"); ?>