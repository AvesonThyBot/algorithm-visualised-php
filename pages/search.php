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

<!-- Display content based on Request -->
<?php $searchController->contentDiplay() ?>


<div class="container-fluid text-white my-5">
    <!--Display Box -->
    <div class="container-xl border border-primary">
        <!-- Title -->
        <h2 class="text-center"><?php echo ucfirst($searchController->getCurrentType()) ?></h2>
        <br>

        <!-- Data -->
        <div class="container-xl border border-primary">
            <span class="user-select-none bg-white">a</span>
            <span class="user-select-none bg-white" style="min-height: 10px !important ;">a</span>
        </div>
        <br>
    </div>

    <!-- Options -->
    <div class="container-xl border border-primary">
        <br>
        <!-- Input Form for Data entry & Settings -->
        <form class="col g-3 needs-validation text-end" novalidate>

            <!-- Select Type of Data Entry -->
            <div class="select-data-entry container">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dataEntry" id="defaultData" value="default">
                    <label class="form-check-label" for="defaultData">Default Data (1-100)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="dataEntry" id="customData" value="custom">
                    <label class="form-check-label" for="customData">Custom Data</label>
                </div>
            </div>

            <!-- Custom Entry Input Box -->
            <div class="form-floating mb-3 text-black col-sm-6 ms-auto d-none">
                <input type="text" class="form-control" id="customNumber" placeholder="1">
                <label for="floatingInput">Enter Number between 0-100 (Use comma to seperate multiple)</label>
                <!-- Invalid Feedback -->
                <div class="invalid-feedback text-white">
                    Invalid input!
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary my-2">
                Submit!
            </button>

        </form>
    </div>

</div>

<!-- Footer -->
<?php include("../includes/footer.php"); ?>