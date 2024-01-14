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
<main class="text-white bg-dark d-flex flex-column row-gap-3 my-2 <?php $sortController->getCurrentDisplay('all') ?>">
    <div class="row m-0">
        <?php
        // Loop each sort type info
        $sortController->sortInfoContent()
        ?>
    </div>
    <h4 class="fw-light text-start fs-5 mx-1"><?php $sortController->getLastUpdate() ?></h4>
</main>

<!-- Specific sort -->
<section class="container-fluid text-white my-3 <?php $sortController->getCurrentDisplay('specific') ?>">
    <!--Display Box -->
    <div class="container-xl border border-primary">
        <!-- Title -->
        <h2 class="text-center"><?php echo ucfirst($sortController->getCurrentType()) ?></h2>
        <!-- Data -->
        <div class="container-xl border border-primary p-2 user-select-text text-center rounded" id="dataDisplay">
            <?php
            $sortController->algorithmDataDisplay()
            ?>
            <h5 class="mt-2" id="heading"><?php echo ucfirst($sortController->getCurrentType()) ?> Sort for data between 1 to 100.</h5>
        </div>
        <br>
    </div>

    <!-- Options -->
    <div class="container-xl border border-primary">
        <br>
        <!-- Input Form for Data entry & Settings -->
        <form class="col g-3 needs-validation text-end" method="POST" action="../pages/sort.php?type=result" novalidate>

            <!-- Randomise Data-->
            <button type="button" class="btn btn-outline-primary text-start float-start" id="randomiseBtn">
                Randomise
            </button>

            <!-- Select Type of Data Entry -->
            <div class="select-data-entry container">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" checked="checked" name="dataEntry" id="defaultData" value="default">
                    <label class="form-check-label user-select-none" for="defaultData">Default Data (1-100)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dataEntry" id="customData" value="custom">
                    <label class="form-check-label user-select-none" for="customData">Custom Data</label>
                </div>
            </div>

            <!-- Custom Entry Input Box -->
            <div class="form-floating mb-3 text-black col-sm-6 ms-auto d-none" id="customInput">
                <input type="text" class="form-control" id="customNumber" placeholder="1" name="customData">
                <label for="floatingInput">Enter 10-100 Positive Numbers (Use comma to seperate multiple)</label>
                <!-- Invalid Feedback -->
                <div class="invalid-feedback text-danger fw-bold">
                    Invalid input!
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary my-2">
                Try Now!
            </button>
        </form>
        <h4 class="fw-light text-start fs-5 mx-1"><?php $sortController->getLastUpdate() ?></h4>
    </div>
</section>

<!-- Result Page -->
<section class="container-fluid text-white my-3 <?php $sortController->getCurrentDisplay('result') ?>">
</section>

<!-- Footer -->
<?php
$extraScript = "/scripts/app.js";
include("../includes/footer.php"); ?>