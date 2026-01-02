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
    '' => 'pages/home.php',
    '/' => 'pages/home.php',
    'home' => 'pages/home.php',
    'about' => 'pages/about.php',
    'service' => 'pages/service.php',
    'services' => 'pages/service.php', // Alias
    'courses' => 'pages/course.php',
    'course' => 'pages/course.php',   // Alias
    'books' => 'pages/books.php',
    'blog' => 'pages/blog.php',
    'blogs' => 'pages/blog.php',      // Alias
    'blog-details' => 'pages/blog-details.php',
    'videos' => 'pages/videos.php',
    'contact' => 'pages/contact.php',
    'mailer' => 'pages/mailer.php',
    'not-available' => 'pages/not-available.php',
    'sitemap.xml' => 'pages/sitemap.php'
];

// Check if route exists
if (array_key_exists($request, $routes)) {
    include __DIR__ . '/' . $routes[$request];
} else {
    // 404 Not Found
    http_response_code(404);
    include __DIR__ . '/pages/error.php';
}
