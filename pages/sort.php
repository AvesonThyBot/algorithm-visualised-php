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
    <!-- 1st Row -->
    <div class="row m-0">
        <div class="col-6 my-2">
            <div class="card bg-primary-subtle text-center">
                <div class="card-body">
                    <h5 class="card-title">Selection Sort</h5>
                    <p class="card-text text-start">Simple comparison-based sorting algorithm. Selects the smallest element and swaps it with the first element. The process is repeated until the entire list is sorted.<br><strong>Pros:</strong> Simple, in-place, and stable.<br>Video example:</p>
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/92BfuxHn2XE?si=G0On7QBReMv3o4Ug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="card-footer text-body-secondary">
                    <a href="../pages/sort.php?type=selection" class="btn btn-outline-primary">Try now</a>
                </div>
            </div>
        </div>
        <div class="col-6 my-2">
            <div class="card bg-primary-subtle text-center">
                <div class="card-body">
                    <h5 class="card-title">Bubble Sort</h5>
                    <p class="card-text text-start">Repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order. The pass through the list is repeated until the list is sorted.<br><strong>Pros:</strong> Simple, stable.<br>Video example:</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Cq7SMsQBEUw?si=jDpdOBJntcyZoteQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="card-footer text-body-secondary">
                    <a href="../pages/sort.php?type=bubble" class="btn btn-outline-primary">Try now</a>
                </div>
            </div>
        </div>
        <!-- 2nd Row -->
        <div class="col-6 my-2">
            <div class="card bg-primary-subtle text-center">
                <div class="card-body">
                    <h5 class="card-title">Insertion Sort</h5>
                    <p class="card-text text-start">Builds the final sorted array one item at a time. It is much less efficient on large lists than more advanced algorithms such as quicksort, heapsort, or merge sort.<br><strong>Pros:</strong> Simple, adaptive, and stable.<br>Video example:</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Cq7SMsQBEUw?si=UOIq6yAyu3ICPPC1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="card-footer text-body-secondary">
                    <a href="../pages/sort.php?type=insertion" class="btn btn-outline-primary mx-auto">Try now</a>
                </div>
            </div>
        </div>
        <div class="col-6 my-2">
            <div class="card bg-primary-subtle text-center">
                <div class="card-body">
                    <h5 class="card-title">Merge Sort</h5>
                    <p class="card-text text-start">Divide and conquer algorithm. It divides input array into two halves, calls itself for the two halves, and then merges the two sorted halves.<br><strong>Pros:</strong> Stable, works well on large datasets.<br>Video example:</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ZRPoEKHXTJg?si=iVTpvTCYNT3PTKj_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="card-footer text-body-secondary">
                    <a href="../pages/sort.php?type=merge" class="btn btn-outline-primary mx-auto">Try now</a>
                </div>
            </div>
        </div>
        <!-- 3rd Row -->
        <div class="col-6 my-2">
            <div class="card bg-primary-subtle text-center">
                <div class="card-body">
                    <h5 class="card-title">Quick Sort</h5>
                    <p class="card-text text-start">Divide and conquer algorithm with a pivot element. Elements less than the pivot go on one side, and elements greater than the pivot go on the other side.<br><strong>Pros:</strong> Fast on average, in-place.<br>Video example:</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8hEyhs3OV1w?si=TmMcfU7qIEv4UyEF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="card-footer text-body-secondary">
                    <a href="../pages/sort.php?type=quick" class="btn btn-outline-primary mx-auto">Try now</a>
                </div>
            </div>
        </div>
        <div class="col-6 my-2">
            <div class="card bg-primary-subtle text-center">
                <div class="card-body">
                    <h5 class="card-title">Counting Sort</h5>
                    <p class="card-text text-start">Sorting algorithm for integers without comparison. It counts the number of occurrences of each element and stores it in an auxiliary array.<br><strong>Pros:</strong> Efficient for integers.<br>Video example:</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7zuGmKfUt7s?si=CSxdDEPhysTC9-I7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="card-footer text-body-secondary">
                    <a href="../pages/sort.php?type=counting" class="btn btn-outline-primary mx-auto">Try now</a>
                </div>
            </div>
        </div>
        <!-- 4th Row -->
        <div class="col-6 mx-auto my-2">
            <div class="card bg-primary-subtle text-center">
                <div class="card-body">
                    <h5 class="card-title">Bogo Sort</h5>
                    <p class="card-text text-start">A highly ineffective algorithm based on generating permutations. It randomly permutes the input until it is sorted.<br><strong>Pros:</strong> None (not practical).<br>Video example:</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DaPJkYo2quc?si=Q_mB1OKd_MmLpW72" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="card-footer text-body-secondary">
                    <a href="../pages/sort.php?type=bogo" class="btn btn-outline-primary mx-auto">Try now</a>
                </div>
            </div>
        </div>
    </div>
</main>






<!-- Footer -->
<?php include("../includes/footer.php"); ?>