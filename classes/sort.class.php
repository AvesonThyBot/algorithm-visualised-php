<?php
// Checks if the URL contains "classes/" or "includes/"
if (strpos($_SERVER['PHP_SELF'], 'classes/') !== false || strpos($_SERVER['PHP_SELF'], 'includes/') !== false) {
    header('Location: ../index.php');
    exit();
}

class Sort {
    // Properties
    private $sortType;

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

    public function __construct($type) {
        if ($type !== "null") {
            $this->sortType = $type; //set sort type
        }
    }

    public function getCurrentType() {
        return $this->sortType;
    }
    public function getAllType() {
        return "hi";
    }
}
