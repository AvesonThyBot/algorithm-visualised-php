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
    private $validTypes = ['linear', 'binary', 'ternary', 'jump', 'interpolation', 'exponential', 'fibonacci', ''];
    private $searchInfo = [];

    // ---------------------------------------------- ^^ Properties ^^ ---------------------------------------------- 

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
        if (!strlen($this->searchType) == 0) {
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
            <div class="col-6 ' . ($search['title'] !== 'Bogo Sort' ? 'my-2' : 'mx-auto my-2') . '">
                <div class="card bg-primary-subtle text-center">
                    <div class="card-body">
                        <h5 class="card-title">' . $search['title'] . '</h5>
                        <p class="card-text text-start">' . $search['description'] . '</p>
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
        echo '</div></main>';
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
