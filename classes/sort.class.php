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
    private $sortInfo = [
        0 => [
            'title' => 'Selection Sort',
            'description' => 'Simple comparison-based sorting algorithm. Selects the smallest element and swaps it with the first element. The process is repeated until the entire list is sorted.<br>Video example:',
            'video' => '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/92BfuxHn2XE?si=G0On7QBReMv3o4Ug" title="YouTube video player"></iframe>',
            'href' => '../pages/sort.php?type=selection'
        ],
        1 => [
            'title' => 'Bubble Sort',
            'description' => 'Repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order. The pass through the list is repeated until the list is sorted.<br>Video example:',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Cq7SMsQBEUw?si=jDpdOBJntcyZoteQ" title="YouTube video player"></iframe>',
            'href' => '../pages/sort.php?type=bubble'
        ],
        2 => [
            'title' => 'Insertion Sort',
            'description' => 'Builds the final sorted array one item at a time. It is much less efficient on large lists than more advanced algorithms such as quicksort, heapsort, or merge sort.<br>Video example:',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Cq7SMsQBEUw?si=UOIq6yAyu3ICPPC1" title="YouTube video player"></iframe>',
            'href' => '../pages/sort.php?type=insertion'
        ],
        3 => [
            'title' => 'Merge Sort',
            'description' => 'Divide and conquer algorithm. It divides input array into two halves, calls itself for the two halves, and then merges the two sorted halves.<br>Video example:',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/ZRPoEKHXTJg?si=iVTpvTCYNT3PTKj_" title="YouTube video player"></iframe>',
            'href' => '../pages/sort.php?type=merge'
        ],
        4 => [
            'title' => 'Quick Sort',
            'description' => 'Divide and conquer algorithm with a pivot element. Elements less than the pivot go on one side, and elements greater than the pivot go on the other side.<br>Video example:',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/8hEyhs3OV1w?si=TmMcfU7qIEv4UyEF" title="YouTube video player"></iframe>',
            'href' => '../pages/sort.php?type=quick'
        ],
        5 => [
            'title' => 'Counting Sort',
            'description' => 'Sorting algorithm for integers without comparison. It counts the number of occurrences of each element and stores it in an auxiliary array.<br>Video example:',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/7zuGmKfUt7s?si=CSxdDEPhysTC9-I7" title="YouTube video player"></iframe>',
            'href' => '../pages/sort.php?type=counting'
        ],
        6 => [
            'title' => 'Bogo Sort',
            'description' => 'A highly ineffective algorithm based on generating permutations. It randomly permutes the input until it is sorted.<br>Video example:',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/DaPJkYo2quc?si=Q_mB1OKd_MmLpW72" title="YouTube video player"></iframe>',
            'href' => '../pages/sort.php?type=bogo'
        ],
    ];

    // ---------------------------------------------- ^^ Properties ^^ ---------------------------------------------- 

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

    // Method to echo the correct web content based on GET request
    public function contentDiplay() {
        if (!strlen($this->sortType) == 0) {
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
                    <p class="card-text text-start">' . $sort['description'] . '</p>
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
        echo '</div></main>';
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
