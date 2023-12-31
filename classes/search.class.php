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
}
