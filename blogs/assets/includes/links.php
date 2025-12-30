<?php
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host   = $_SERVER['HTTP_HOST'];
$baseHref = $scheme . '://' . $host . '/';
?>
<base href="<?php echo $baseHref; ?>">

<title><?= $page_title ?></title>

<meta name="description" content="<?= $page_description ?>">
<meta name="keywords" content="<?= $page_keywords ?>">
<meta name="robots" content="index, follow">

<!-- Open Graph -->
<meta property="og:title" content="<?= $page_title ?>">
<meta property="og:description" content="<?= $page_description ?>">
<meta property="og:image" content="https://drnajmunriyaz.com/assets/images/logo.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="https://drnajmunriyaz.com<?= $_SERVER['REQUEST_URI'] ?>">
<meta property="og:type" content="website">

<!-- Canonical -->
<link rel="canonical" href="https://drnajmunriyaz.com<?= $_SERVER['REQUEST_URI'] ?>">

<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="../css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="assets/css/custom.css?v=<?= time() ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css"
  />

