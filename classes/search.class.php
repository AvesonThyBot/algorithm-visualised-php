<?php
// Checks if the URL contains "classes/" or "includes/"
if (strpos($_SERVER['PHP_SELF'], 'classes/') !== false || strpos($_SERVER['PHP_SELF'], 'includes/') !== false) {
    header('Location: ../index.php');
    exit();
}

// Search Class
class Search {
    // Properties
    private $searchType;
    private $validTypes = ['linear', 'binary', 'ternary', 'jump', 'interpolation', 'exponential', 'fibonacci', '', 'result'];
    private $searchInfo = [
        0 => [
            'title' => 'Linear Search',
            'description' => 'Simple search algorithm that finds the position of a target value within a list.',
            'pros' => 'Straightforward and applicable to various scenarios.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/5SEysJAarbo?si=lwPJksaEX9eTLpJH"></iframe>',
            'href' => '../pages/search.php?type=linear'
        ],
        1 => [
            'title' => 'Binary Search',
            'description' => 'Efficient search algorithm that finds the position of a target value within a sorted array.',
            'pros' => 'Logarithmic time complexity, suitable for large datasets.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/MFhxShGxHWc?si=gFyk3tN3Ij1lspfT"></iframe>',
            'href' => '../pages/search.php?type=binary'
        ],
        2 => [
            'title' => 'Ternary Search',
            'description' => 'Search algorithm that efficiently narrows down the search space in each step.',
            'pros' => 'Divides the search space into three parts, reducing comparisons.',
            'video' => '<iframe width="560" height="315"src="https://www.youtube.com/embed/o3HPRpbGlbI?si=JH0BtF3v3pzkvriB"></iframe>',
            'href' => '../pages/search.php?type=ternary'
        ],
        3 => [
            'title' => 'Jump Search',
            'description' => 'Algorithm for searching sorted arrays by taking fixed steps forward or backward.',
            'pros' => 'Effective for large datasets, combines advantages of linear and binary search.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/63kS6ZkMpkA?si=l6XhYUrLrxLH5g2L"></iframe>',
            'href' => '../pages/search.php?type=jump'
        ],
        4 => [
            'title' => 'Interpolation Search',
            'description' => 'Search algorithm that estimates the position of the target value based on its value.',
            'pros' => 'Effective for uniformly distributed datasets, faster than binary search.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/YSVS5GG1JuI?si=G4mIHdYLjYccW-ch"></iframe>',
            'href' => '../pages/search.php?type=interpolation'
        ],
        5 => [
            'title' => 'Exponential Search',
            'description' => 'Algorithm that searches for an element in a sorted, infinite-sized array.',
            'pros' => 'Logarithmic time complexity, efficient for unbounded arrays.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/BDVYtuWXgXE?si=ZLCt62F2ym5I6ZDc"></iframe>',
            'href' => '../pages/search.php?type=exponential'
        ],
        6 => [
            'title' => 'Fibonacci Search',
            'description' => 'Search algorithm based on the Fibonacci sequence to divide the array into two parts.',
            'pros' => 'Logarithmic time complexity, efficient for sorted arrays.',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/GAafWFRGP7k?si=jjBy2oNjvojUsR7q" ></iframe>',
            'href' => '../pages/search.php?type=fibonacci'
        ],
    ];

    // ---------------------------------------------- ^^ Properties ^^ ---------------------------------------------- 

    // Construct Method to assign type
    public function __construct($type) {
        // Set Search Type
        if ($type && in_array(strtolower($type), $this->validTypes)) {
            $this->searchType = $type;
        } else if (isset($type) && !in_array(strtolower($type), $this->validTypes)) {
            header('Location:../pages/search.php');
        }
    }

    // Method to echo the correct web content based on GET request
    public function contentDiplay() {
        if ($this->searchType == 'result') {
            $this->displayResult();
        } else if (!strlen($this->searchType) == 0) {
            $this->searchAlgorithmContent();
            $this->getAlgorithm($this->searchType);
        } else {
            $this->searchInfoContent();
        }
    }

    // Method to echo the sorting type information
    public function searchInfoContent() {
        // Echo opening tags
        echo '<main class="text-white bg-dark d-flex flex-column row-gap-3 my-2">
            <div class="row m-0">';
        // Loop each search type info
        foreach ($this->searchInfo as $search) {
            echo '
            <div class="col-6 ' . ($search['title'] !== 'Fibonacci Search' ? 'my-2' : 'mx-auto my-2') . '">
                <div class="card bg-primary-subtle text-center">
                    <div class="card-body">
                        <h5 class="card-title">' . $search['title'] . '</h5>
                        <p class="card-text text-start">' . $search['description'] . '<br><strong>Pros: </strong>' . $search['pros'] . '<br><strong>Video example:</strong></p>
                        ' . $search['video'] . '
                    </div>
                    <div class="card-footer text-body-secondary">
                        <a href="' . $search['href'] . '" class="btn btn-outline-primary">Try now</a>
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
    public function searchAlgorithmContent() {
        echo '
        <div class="container-fluid text-white my-5">
            <!-- Display Box -->
            <div class="container-xl border border-primary">
                <!-- Title -->
                <h2 class="text-center">' . ucfirst($this->getCurrentType()) . '</h2>
                <br>

            <!-- Data -->
            <div class="container-xl border border-primary py-2 user-select-text text-center" id="dataDisplay">
                ';

        for ($height = 0; $height < 100; $height++) {
            $isEndOfRow = ($height + 1) % 25 == 0;
            echo '<span class="bg-white h3 text-dark d-inline-block mx-1 user-select-none" style="width: calc(100% / 25 - 8px);">' . ($height + 1) . '</span>';
            echo $isEndOfRow ? '<br>' : '';
        }

        echo '
                <h5 class="mt-2">' . ucfirst($this->getCurrentType()) . ' Search for data between 1 to 100.</h5>
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
                    <input type="text" class="form-control" placeholder="1">
                    <label for="floatingInput">Enter 10-100 Positive Numbers (Use comma to separate multiple)</label>
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
            ' . $this->getLastUpdate() . '
            </div>
        </div>';
    }

    // Method to get Search algorithm
    public function getAlgorithm($type) {
        switch ($type) {
            case 'linear':
                // Code for Linear Search
                break;
            case 'binary':
                // Code for Binary Search
                break;
            case 'ternary':
                // Code for Ternary Search
                break;
            case 'jump':
                // Code for Jump Search
                break;
            case 'interpolation':
                // Code for Interpolation Search
                break;
            case 'exponential':
                // Code for Exponential Search
                break;
            case 'fibonacci':
                // Code for Fibonacci Search
                break;
            default:
                // Default code
                break;
        }
        return $this->searchType;
    }

    // Method to display result
    public function displayResult() {
    }
    // ---------------------------------------------- ^^ Main Methods ^^ ---------------------------------------------- 

    // Getter Method for $searchType
    public function getCurrentType() {
        return $this->searchType;
    }

    public function getAllType() {
        return "hi";
    }

    // Method to get title for webpage
    public function getTitle() {
        if (strlen($this->searchType) == 0) {
            return "Searchs - Algorithm";
        } else {
            return ucfirst($this->searchType) . " - Search";
        }
    }

    // ---------------------------------------------- ^^ Getters & Setters ^^ ---------------------------------------------- 

}
