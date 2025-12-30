<?php
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Remove "dr" if it's in the path
if (strpos($uri, 'dr') === 0) {
    $uri = trim(substr($uri, 2), '/');
}

// Route handling
switch ($uri) {
    case '':
    case 'index':
    case 'index.php':
    case 'index.':
    case 'index.html':
    case 'home':
        include __DIR__ . '/../../pages/home.php';
        break;

    case 'about':
        include __DIR__ . '/../../pages/about.php';
        break;

    case 'COACHING-&-SPEAKING':
        include __DIR__ . '/../../pages/service.php';
        break;

    case 'courses':
        include __DIR__ . '/../../pages/course.php';
        break;

    case 'YT-videos':
        include __DIR__ . '/../../pages/videos.php';
        break;

    case 'books':
        include __DIR__ . '/../../pages/books.php';
        break;

    case 'contact':
        include __DIR__ . '/../../pages/contact.php';
        break;

    case 'mail':
        include __DIR__ . '/../../pages/mailer.php';
        break;

    case 'blog':
        include __DIR__ . '/../../pages/blog.php';
        break;

    case 'blog-details':
        include __DIR__ . '/../../pages/blog-details.php';
        break;

    default:
        include __DIR__ . '/../../pages/error.php';
        break;
}
?>
