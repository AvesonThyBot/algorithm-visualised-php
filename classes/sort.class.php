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
    private $validTypes = ['selection', 'bubble', 'insertion', 'merge', 'quick', 'counting', 'bogo', ''];


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

    // Construct Method to assign type
    public function __construct($type) {
        // Set Sort Type
        if ($type && in_array(strtolower($type), $this->validTypes)) {
            $this->sortType = $type;
        } else if (isset($type) && !in_array(strtolower($type), $this->validTypes)) {
            header('Location:../pages/sort.php');
        }
    }

    // Getter Method for $sortType
    public function getCurrentType() {
        return $this->sortType;
    }
    public function getAllType() {
        return "hi";
    }
}
