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

    // Method to display Algoritm Content
    public function searchAlgorithmContent() {
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
