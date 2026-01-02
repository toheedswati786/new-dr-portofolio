<?php
// Get the current request URI
$request = $_SERVER['REQUEST_URI'];

// Remove query string
$request = strtok($request, '?');

// Remove the base path if the project is in a subdirectory (e.g., /dr-riyaz)
// Adjust this adjustment based on the actual server path
$base_path = '/dr-riyaz';
if (strpos($request, $base_path) === 0) {
    $request = substr($request, strlen($base_path));
}

// Trim leading slash
$request = ltrim($request, '/');

// Define routes
$routes = [
    '' => 'home.php',
    '/' => 'home.php',
    'home' => 'home.php',
    'about' => 'about.php',
    'service' => 'service.php',
    'services' => 'service.php', // Alias
    'courses' => 'course.php',
    'course' => 'course.php',   // Alias
    'books' => 'books.php',
    'blog' => 'blog.php',
    'blogs' => 'blog.php',      // Alias
    'blog-details' => 'blog-details.php',
    'videos' => 'videos.php',
    'contact' => 'contact.php',
    'mailer' => 'mailer.php',
    'not-available' => 'not-available.php',
    'sitemap.xml' => 'sitemap.php'
];

// Check if route exists
if (array_key_exists($request, $routes)) {
    include __DIR__ . '/' . $routes[$request];
} else {
    // 404 Not Found
    http_response_code(404);
    include __DIR__ . '/error.php';
}
