<?php
// Checks if the URL contains "classes/" or "includes/"
if (strpos($_SERVER['PHP_SELF'], 'classes/') !== false || strpos($_SERVER['PHP_SELF'], 'includes/') !== false) {
    header('Location: ../index.php');
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark">
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary nav-pills " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" draggable="false"><img src="../img/logo.png" alt="logo" width="30" height="30" draggable="false"></a>
                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Home -->
                        <li class="nav-item">
                            <a class="nav-link <?php if (isset($navbarActive) && $navbarActive == "home") echo "active"; ?>" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <!-- Sorts -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if (isset($navbarActive) && $navbarActive == "sorts") echo "active"; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sorts
                            </a>
                            <ul class="dropdown-menu">
                                <!-- 3 Options of sort -->
                                <li><a class="dropdown-item" href="../pages/sort.php?type=insertion">Insertion Sort</a></li>
                                <li><a class="dropdown-item" href="../pages/sort.php?type=bubble">Bubble Sort</a></li>
                                <li><a class="dropdown-item" href="../pages/sort.php?type=merge">Merge Sort</a></li>
                                <!-- Divider -->
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <!-- Show all -->
                                <li><a class="dropdown-item" href="../pages/sort.php">Show more...</a></li>
                            </ul>
                        </li>
                        <!-- Search -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if (isset($navbarActive) && $navbarActive == "search") echo "active"; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Search
                            </a>
                            <ul class="dropdown-menu">
                                <!-- 3 Options of Search -->
                                <li><a class="dropdown-item" href="../pages/search.php?type=linear">Linear Search</a></li>
                                <li><a class="dropdown-item" href="../pages/search.php?type=binary">Binary Search</a></li>
                                <li><a class="dropdown-item" href="../pages/search.php?type=ternary">Ternary Search</a></li>
                                <!-- Divider -->
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <!-- Show all -->
                                <li><a class="dropdown-item" href="../pages/search.php">Show more...</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>