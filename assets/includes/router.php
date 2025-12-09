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

    case 'resources':
        include __DIR__ . '/../../pages/resources.php';
        break;

    case 'videos':
        include __DIR__ . '/../../pages/videos.php';
        break;

    case 'speaking':
        include __DIR__ . '/../../pages/speaking.php';
        break;

    case 'service':
        include __DIR__ . '/../../pages/service.php';
        break;

    case 'courses':
        include __DIR__ . '/../../pages/courses.php';
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

    case 'print':
        include __DIR__ . '/../../pages/blog-details.php';
        break;

    case 'Navigating-Impostor-Syndrome':
        include __DIR__ . '/../../pages/NIS-blog.php';
        break;

    case 'Guide-to-Deep-Emotional-Connections':
        include __DIR__ . '/../../pages/GTDEC-details.php';
        break;

    case 'Seasonal-Depression':
        include __DIR__ . '/../../pages/sd-details.php';
        break;

    case 'Complex-Psychology-of-Control':
        include __DIR__ . '/../../pages/CPC-details.php';
        break;

    case 'Navigating-Anxiety-Through-Nervous':
        include __DIR__ . '/../../pages/NATN-details.php';
        break;

    case 'Gentle-Parenting-Movement':
        include __DIR__ . '/../../pages/GPM-details.php';
        break;

    case 'Married-to-an-Overachiever':
        include __DIR__ . '/../../pages/MTAO-details.php';
        break;

    case 'is-too-much-empathy-a-thing':
        include __DIR__ . '/../../pages/TMET-details.php';
        break;

    case 'invalidating-childhood-environments':
        include __DIR__ . '/../../pages/ICE-details.php';
        break;

    case 'the-overachievers-dilemma':
        include __DIR__ . '/../../pages/TOD-details.php';
        break;

    case 'five-signs-of-a-toxic-workplaces':
        include __DIR__ . '/../../pages/FSTW-details.php';
        break;

    case 'how-to-manage-the-holiday-stress':
        include __DIR__ . '/../../pages/HMHS-details.php';
        break;

    case 'how-art-helps-to-heal-anxiety':
        include __DIR__ . '/../../pages/HPPA-details.php';
        break;

    case 'telepathy-a-paranormal-phenomenon-a-symptom-of-psychosis-or-a-love-language':
        include __DIR__ . '/../../pages/TAPPA-details.php';
        break;

    case 'street-harassment-catcalling-flirting-a-casual-act-or-sexual-harassment':
        include __DIR__ . '/../../pages/SHCFCAS-details.php';
        break;

    case 'daughters-our-biggest-teachers':
        include __DIR__ . '/../../pages/DODT-details.php';
        break;

    case 'self-love-the-remedy-for-people-pleasing-gxlae':
        include __DIR__ . '/../../pages/SLRPP-details.php';
        break;

    case 'self-love-the-remedy-for-people-pleasing':
        include __DIR__ . '/../../pages/SLRP-details.php';
        break;

    case 'an-antidote-to-perfectionism':
        include __DIR__ . '/../../pages/AATP-details.php';
        break;

    case 'mindfulness-a-fathers-gift':
        include __DIR__ . '/../../pages/MAFG-details.php';
        break;

    case 'mab48mjyhfpwp218dvjz4x4uqus5q2':
        include __DIR__ . '/../../pages/PTGMS-details.php';
        break;

    case 'imagination-the-most-underutilized-coping-strategy':
        include __DIR__ . '/../../pages/ITMUCS-details.php';
        break;

    case 'trip-to-disney-world-lesson-on-emotional-intelligence':
        include __DIR__ . '/../../pages/TTDWLOEI-details.php';
        break;

    case 'valentines-day-the-fantasies-and-the-realities-xbgtd':
        include __DIR__ . '/../../pages/VDTFATRX-details.php';
        break;

    case 'valentines-day-the-fantasies-and-the-realities':
        include __DIR__ . '/../../pages/VDTFATR-details.php';
        break;


    default:
        include __DIR__ . '/../../pages/error.php';
        break;
}
?>
