<?php
    // Get the blog file name from the query parameter
    $fileName = isset($_GET['file']) ? $_GET['file'] : 'default-blog';

    // Sanitize the file name to prevent directory traversal attacks
    $fileName = basename($fileName);
    $blogName = isset($_GET['name']) ? $_GET['name'] : 'Blog Details';
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
            font-size: 18px !important;
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
                        <?php echo htmlspecialchars($blogName); ?>
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
                                <?php 
                                    // Include the blog content from the get request parameter\
                                    $blogFilePath = __DIR__ . '/blogs/' . $fileName . '-details.php';
                                    if (file_exists($blogFilePath)) {
                                        include $blogFilePath;
                                    } else {
                                        echo "<p>Blog not found.</p>";
                                    }
                                ?>
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