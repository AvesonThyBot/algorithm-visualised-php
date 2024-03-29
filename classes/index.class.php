<?php

// Checks if the URL contains "classes/" or "includes/"
if (strpos($_SERVER['PHP_SELF'], 'classes/') !== false || strpos($_SERVER['PHP_SELF'], 'includes/') !== false) {
    header('Location: ../index.php');
    exit();
}

// Class for loading content
class Index {
    // Get last Update time
    public function lastUpdate() {
        date_default_timezone_set('GMT');
        echo date("jS F, g:ia", filemtime("index.php"));
    }
}
