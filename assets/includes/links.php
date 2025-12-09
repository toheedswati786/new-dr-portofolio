<?php include __DIR__ . '/seo.php'; ?>

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


<link
  rel="shortcut icon"
  href="assets/images/site_logo/logo.svg" />
<link
  rel="stylesheet"
  type="text/css"
  href="assets/css/bootstrap.min.css" />
<link
  rel="stylesheet"
  type="text/css"
  href="assets/css/fontawesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/cursor.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/slick.min.css" />
<link
  rel="stylesheet"
  type="text/css"
  href="assets/css/slick-theme.min.css" />
<link
  rel="stylesheet"
  type="text/css"
  href="assets/css/magnific-popup.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/odometer.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.min.css" />