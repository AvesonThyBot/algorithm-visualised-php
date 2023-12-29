<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" draggable="false"><img src="img/logo.png" alt="logo" width="30" height="30" draggable="false"></a>
        <!-- Responsive navbar toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <!-- Sorts -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sorts
                    </a>
                    <ul class="dropdown-menu">
                        <!-- 3 Options of sort -->
                        <li><a class="dropdown-item" href="pages/sort.php?type=insertion">Insertion Sort</a></li>
                        <li><a class="dropdown-item" href="pages/sort.php?type=bubble">Bubble Sort</a></li>
                        <li><a class="dropdown-item" href="pages/sort.php?type=merge">Merge Sort</a></li>
                        <!-- Divider -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Show all -->
                        <li><a class="dropdown-item" href="pages/sort.php">Show more...</a></li>
                    </ul>
                </li>
                <!-- Search -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Search
                    </a>
                    <ul class="dropdown-menu">
                        <!-- 3 Options of Search -->
                        <li><a class="dropdown-item" href="pages/search.php?type=linear">Linear Search</a></li>
                        <li><a class="dropdown-item" href="pages/search.php?type=binary">Binary Search</a></li>
                        <li><a class="dropdown-item" href="pages/search.php?type=ternary">Ternary Search</a></li>
                        <!-- Divider -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Show all -->
                        <li><a class="dropdown-item" href="pages/search.php">Show more...</a></li>
                    </ul>
                </li>
            </ul>Search
        </div>
    </div>
</nav>