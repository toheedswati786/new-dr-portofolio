<?php 
$baseUrl = "http://" . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/';
$blogUrl = $baseUrl . 'blogs/VDTFATR-details.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/assets/includes/links.php'; ?>
    <style>
        body{
            scrollbar-color: white !important;
        }
        p {
            text-align: justify;
            font-size: 19px !important;
        }
        .view-blog-page {
            width: 100%;
            height: 100vh;
            border: none;
        }
    </style>
</head>

<body>
    <div class="page_wrapper">
        <div class="backtotop">
            <a href="#" class="scroll"><i class="fa-solid fa-arrow-up"></i></a>
        </div>
        <?php include __DIR__ . '/assets/includes/header.php'; ?>
        <main class="page_content">
            <section class="page_banner decoration_wrapper">
                <div class="container">
                    <h1 class="page_title">
                        Valentine’s Day: The Fantasies and The Realities
                    </h1>
                </div>
                <div class="decoration_item shape_leaf_1">
                    <img
                        src="assets/images/shapes/shape_leaf_left.svg"
                        alt="Shape Leaf - Talking Minds - Psychotherapist Site Template" />
                </div>
                <div class="decoration_item shape_leaf_2">
                    <img
                        src="assets/images/shapes/shape_leaf_right.svg"
                        alt="Shape Leaf - Talking Minds - Psychotherapist Site Template" />
                </div>
            </section>
            <section class="blog_details_section  pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="details_content">
                                <!-- blog section starts here -->
                                <iframe class="view-blog-page" src="<?php echo $blogUrl;?>"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include __DIR__ . '/assets/includes/footer.php'; ?>
    </div>
    <?php include __DIR__ . '/assets/includes/scripts.php'; ?>

</body>

</html>