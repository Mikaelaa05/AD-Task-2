<?php
require __DIR__ . '/bootstrap.php';

if (php_sapi_name() === 'cli-server') {
    $urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $filePath = BASE_PATH . $urlPath;
    if (is_file($filePath)) {
        return false; // Serve the requested file directly
    }
}

require BASE_PATH . '/index.php';