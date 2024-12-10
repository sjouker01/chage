<?php

spl_autoload_register(function ($class) {
    // Define an array of namespace prefixes and their base directories
    $prefixes = [
        'BeveiligingApp\\' => __DIR__ . '/',
        'App\\Controllers\\' => __DIR__ . '/Controllers/'
    ];

    // Loop through the prefixes array
    foreach ($prefixes as $prefix => $base_dir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            continue;
        }

        $relative_class = substr($class, $len);
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});