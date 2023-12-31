<?php

// Checks if the URL contains "classes/" or "includes/"
if (strpos($_SERVER['PHP_SELF'], 'classes/') !== false || strpos($_SERVER['PHP_SELF'], 'includes/') !== false) {
    header('Location: ../index.php');
    exit();
}

// Class for loading content
class LoadContent {
    // HTML content for sort section
    private function titleContent() {
        echo '
        <div class="card bg-dark my-3 border-primary rounded text-white text-end">
            <div class="card-body">
                <h4 class="card-text fw-bold fs-1" id="title-sort">Sorting</h4>
                <h4 class="card-text fw-bold fs-1" id="title-search">Searching</h4>
                <h4 class="card-text fw-bold fs-1" id="title-alg">Algorithm</h4>
                <h4 class="card-text fw-bold fs-1" id="title-vis">Visualizer</h4>
                <h4 class="card-text fw-light text-start fs-5">' . "Last Updated: " . date("jS F, g:ia", filemtime("index.php")) . " UTC." . '</h4>
            </div>
        </div>
        ';
    }

    // HTML content for sort section
    private function sortContent() {
        echo '
        <div class="px-4 py-5 my-3 text-center border border-primary shadow rounded">
            <h1 class="display-5 fw-bold">Sorting Algorithms</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Immerse yourself in the realm of optimized data organization with our sorting algorithms. Experience the fundamental approaches, from the simplicity of Selection Sort to the elegance of Merge Sort and the efficiency of Quick Sort. Dive into the unpredictability of Bogo Sort and explore more in our diverse collection.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="../pages/sort.php?type=selection"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Selection</button></a>
                    <a href="../pages/sort.php?type=bubble"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Bubble</button></a>
                    <a href="../pages/sort.php?type=insertion"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Insertion</button></a>
                    <a href="../pages/sort.php?type=merge"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Merge</button></a>
                    <a href="../pages/sort.php?type=quick"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Quick</button></a>
                    <a href="../pages/sort.php?type=counting"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Counting</button></a>
                    <a href="../pages/sort.php?type=bogo"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Bogo</button></a>
                </div>
                <br class="user-select-none">
                <a href="../pages/sort.php"><button type="button" class="btn btn-outline-success btn-lg px-4 gap-3">Explore All</button></a>
            </div>
        </div>
        ';
    }

    // HTML content for search section
    private function searchContent() {
        echo '
        <div class="px-4 py-5 my-3 text-center border border-primary shadow rounded">
            <h1 class="display-5 fw-bold">Searching Algorithms</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Delve into the world of efficient data retrieval with our searching algorithms. From the simplicity of Linear Search to the precision of Binary Search and the mathematical elegance of Fibonacci Search. Explore the collection underneath.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="../pages/search.php?type=linear"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Linear</button></a>
                    <a href="../pages/search.php?type=binary"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Binary</button></a>
                    <a href="../pages/search.php?type=ternary"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Ternary</button></a>
                    <a href="../pages/search.php?type=jump"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Jump</button></a>
                    <a href="../pages/search.php?type=interpolation"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Interpolation</button></a>
                    <a href="../pages/search.php?type=exponential"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Exponential</button></a>
                    <a href="../pages/search.php?type=fibonacci"><button type="button" class="btn btn-outline-primary btn-lg px-4 gap-3">Fibonacci</button></a>
                </div>
                <br class="user-select-none">
                <a href="../pages/search.php"><button type="button" class="btn btn-outline-success btn-lg px-4 gap-3">Explore All</button></a>
            </div>
        </div>
        ';
    }

    public function getContent($type) {
        switch ($type) {
            case 'title':
                $this->titleContent();
                break;
            case 'sort':
                $this->sortContent();
                break;
            case 'search':
                $this->searchContent();
                break;
            default:
                echo "There was an cruical error in the system. Please contact the developers.";
                break;
        }
    }
}
