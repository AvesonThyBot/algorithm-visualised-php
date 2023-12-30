<!-- import classes -->
<?php include("classes/web-info.class.php"); ?>
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
    $loadingContent->getContent("title");

    // Sort Section
    $loadingContent->getContent("sort");

    // Search Section
    $loadingContent->getContent("search");
    ?>
</main>

<!-- Footer -->
<?php include("includes/footer.php"); ?>