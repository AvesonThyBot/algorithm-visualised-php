<?php
// Checks if the URL contains "classes/" or "includes/"
if (strpos($_SERVER['PHP_SELF'], 'classes/') !== false || strpos($_SERVER['PHP_SELF'], 'includes/') !== false) {
    header('Location: ../index.php');
    exit();
}

// Sort Class
class Sort {
    // Properties
    private $sortType;
    private $validTypes = ['selection', 'bubble', 'insertion', 'merge', 'quick', 'counting', 'bogo', '', 'result'];
    private $sortInfo = [
        0 => [
            'title' => 'Selection Sort',
            'description' => 'Simple comparison-based sorting algorithm. Selects the smallest element and swaps it with the first element. The process is repeated until the entire list is sorted.',
            'pros' => 'Simple, in-place, and stable.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/92BfuxHn2XE?si=G0On7QBReMv3o4Ug"></iframe>',
            'href' => '../pages/sort.php?type=selection'
        ],
        1 => [
            'title' => 'Bubble Sort',
            'description' => 'Repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order. The pass through the list is repeated until the list is sorted.',
            'pros' => 'Simple, stable.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Cq7SMsQBEUw?si=jDpdOBJntcyZoteQ"></iframe>',
            'href' => '../pages/sort.php?type=bubble'
        ],
        2 => [
            'title' => 'Insertion Sort',
            'description' => 'Builds the final sorted array one item at a time. It is much less efficient on large lists than more advanced algorithms such as quicksort, heapsort, or merge sort.',
            'pros' => 'Simple, adaptive, and stable.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Cq7SMsQBEUw?si=UOIq6yAyu3ICPPC1"></iframe>',
            'href' => '../pages/sort.php?type=insertion'
        ],
        3 => [
            'title' => 'Merge Sort',
            'description' => 'Divide and conquer algorithm. It divides input array into two halves, calls itself for the two halves, and then merges the two sorted halves.',
            'pros' => 'Stable, works well on large datasets.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/ZRPoEKHXTJg?si=iVTpvTCYNT3PTKj_"></iframe>',
            'href' => '../pages/sort.php?type=merge'
        ],
        4 => [
            'title' => 'Quick Sort',
            'description' => 'Divide and conquer algorithm with a pivot element. Elements less than the pivot go on one side, and elements greater than the pivot go on the other side.',
            'pros' => 'Fast on average, in-place.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/8hEyhs3OV1w?si=TmMcfU7qIEv4UyEF"></iframe>',
            'href' => '../pages/sort.php?type=quick'
        ],
        5 => [
            'title' => 'Counting Sort',
            'description' => 'Sorting algorithm for integers without comparison. It counts the number of occurrences of each element and stores it in an auxiliary array.',
            'pros' => 'Efficient for integers.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/7zuGmKfUt7s?si=CSxdDEPhysTC9-I7"></iframe>',
            'href' => '../pages/sort.php?type=counting'
        ],
        6 => [
            'title' => 'Bogo Sort',
            'description' => 'A highly ineffective algorithm based on generating permutations. It randomly permutes the input until it is sorted.',
            'pros' => 'None (not practical).',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/DaPJkYo2quc?si=Q_mB1OKd_MmLpW72"></iframe>',
            'href' => '../pages/sort.php?type=bogo'
        ],
    ];

    // ---------------------------------------------- ^^ Properties ^^ ---------------------------------------------- 

    // Construct Method to assign type
    public function __construct($type) {
        // Set Sort Type
        if ($type && in_array(strtolower($type), $this->validTypes)) {
            $this->sortType = $type;
        } else if (isset($type) && !in_array(strtolower($type), $this->validTypes)) {
            header('Location:../pages/sort.php');
        }
    }

    // Method to echo the correct web content based on GET request
    public function contentDiplay() {
        if ($this->sortType == 'result') {
            $this->displayResult();
        } else if (!strlen($this->sortType) == 0) {
            $this->sortAlgorithmContent();
            $this->getAlgorithm($this->sortType);
        } else {
            $this->sortInfoContent();
        }
    }

    // Method to echo the sorting type information
    public function sortInfoContent() {
        // Echo opening tags
        echo '<main class="text-white bg-dark d-flex flex-column row-gap-3 my-2">
        <div class="row m-0">';
        // Loop each sort type info
        foreach ($this->sortInfo as $sort) {
            echo '
        <div class="col-6 ' . ($sort['title'] !== 'Bogo Sort' ? 'my-2' : 'mx-auto my-2') . '">
            <div class="card bg-primary-subtle text-center">
                <div class="card-body">
                    <h5 class="card-title">' . $sort['title'] . '</h5>
                    <p class="card-text text-start">' . $sort['description'] . '<br><strong>Pros: </strong>' . $sort['pros'] . '<br><strong>Video example:</strong></p>
                    ' . $sort['video'] . '
                </div>
                <div class="card-footer text-body-secondary">
                    <a href="' . $sort['href'] . '" class="btn btn-outline-primary">Try now</a>
                </div>
            </div>
        </div>
        ';
        }
        // Echo closing tags
        echo '</div>' . $this->getLastUpdate() . '</main>';
    }

    // Method to get last updated date/time
    private function getLastUpdate() {
        date_default_timezone_set('GMT');
        return '<h4 class="fw-light text-start fs-5 mx-1">' . "Last Updated: " . date("jS F, g:ia", filemtime("sort.php")) . " UTC." . '</h4>';
    }

    // Method to display Algoritm Content
    public function sortAlgorithmContent() {
        echo '<div class="container-fluid text-white my-3">
        <!--Display Box -->
        <div class="container-xl border border-primary">
            <!-- Title -->
            <h2 class="text-center">' . ucfirst($this->getCurrentType()) . '</h2>
            <br>
    
            <!-- Data -->
            <div class="container-xl border border-primary p-2 user-select-text text-center" id="dataDisplay">';

        for ($height = 5; $height <= 500; $height += 5) {
            echo '<span class="bg-white d-inline-block" style="width: 10px; height: ' . $height . 'px;"></span>';
        }

        echo '<h5>' . ucfirst($this->getCurrentType()) . ' Sort for data between 1 to 100.</h5>
            </div>
            <br>
        </div>
    
        <!-- Options -->
        <div class="container-xl border border-primary">
            <br>
            <!-- Input Form for Data entry & Settings -->
            <form class="col g-3 needs-validation text-end" method="POST" novalidate>
    
                <!-- Select Type of Data Entry -->
                <div class="select-data-entry container">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked="checked" name="dataEntry" id="defaultData" value="default">
                        <label class="form-check-label" for="defaultData">Default Data (1-100)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="dataEntry" id="customData" value="custom">
                        <label class="form-check-label" for="customData">Custom Data</label>
                    </div>
                </div>
    
                <!-- Custom Entry Input Box -->
                <div class="form-floating mb-3 text-black col-sm-6 ms-auto d-none" id="customInput">
                    <input type="text" class="form-control" id="customNumber" placeholder="1">
                    <label for="floatingInput">Enter 10-100 Positive Numbers (Use comma to seperate multiple)</label>
                    <!-- Invalid Feedback -->
                    <div class="invalid-feedback text-white">
                        Invalid input!
                    </div>
                </div>
    
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary my-2">
                    Try Now!
                </button>
            </form>
            ' . $this->getLastUpdate() . '
        </div>
        </div>';
    }

    // Method to get sort algorithm
    public function getAlgorithm($type) {
        switch ($type) {
            case 'selection':
                // Code for Selection Sort
                break;
            case 'bubble':
                // Code for Bubble Sort
                break;
            case 'insertion':
                // Code for Insertion Sort
                break;
            case 'merge':
                // Code for Merge Sort
                break;
            case 'quick':
                // Code for Quick Sort
                break;
            case 'counting':
                // Code for Counting Sort
                break;
            case 'bogo':
                // Code for Bogo Sort
                break;
            default:
                // Default code
                break;
        }
        return $this->sortType;
    }

    // Method to display result
    public function displayResult() {
    }

    // ---------------------------------------------- ^^ Main Methods ^^ ---------------------------------------------- 

    // Getter Method for $sortType
    public function getCurrentType() {
        return $this->sortType;
    }
    public function getAllType() {
        return "hi";
    }
    // Method to get title for webpage
    public function getTitle() {
        if (strlen($this->sortType) == 0) {
            return "Sorts - Algorithm";
        } else {
            return ucfirst($this->sortType) . " - Sort";
        }
    }

    // ---------------------------------------------- ^^ Getters & Setters ^^ ---------------------------------------------- 

}
