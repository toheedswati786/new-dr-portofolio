<!doctype html>
<html lang="en">

<head>
  <?php include __DIR__ . '/assets/includes/links.php'; ?>
  <style>
    span.btn_text{
    color: #41132b;
}
  </style>
</head>

<body>
  <div class="page_wrapper">
    <div class="backtotop"><a href="#" class="scroll"><i class="fa-solid fa-arrow-up"></i></a></div>
    <?php include __DIR__ . '/assets/includes/header.php'; ?>
    <main class="page_content">
      <section class="page_banner decoration_wrapper">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <h1 class="page_title mb-0">Blog</h1>
            </div>
          </div>
        </div>
        <div class="decoration_item shape_leaf_1"><img src="assets/images/shapes/shape_leaf_left.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template"></div>
        <div class="decoration_item shape_leaf_2"><img src="assets/images/shapes/shape_leaf_right.svg" alt="Shape Leaf - Talking Minds - Psychotherapist Site Template"></div>
      </section>
      <section class="blog_section section_space_lg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <!-- first blog item -->
                <div class="col-md-4">
                  <div class="blog_item">
                    <div class="blog_image"><a class="blog_image_wrap" href="blog_details.php"><img src="http://localhost/dr/assets/images/blog/thumbnail/1.png" alt="Talking Minds - The pros and cons of group psychotherapy"></a></div>
                    <div class="blog_content">
                      <h3 class="item_title"><a href="blog_details.php">Valentine’s Day: The Fantasies and The Realities</a></h3>
                      <p>Valentine’s Day isn't just about romance. Explore the history of the holiday, the reality of toxic cycles, and how to reclaim the day through the power of self-love.</p><a class="btn-link" href="blog_details.php"><span class="btn_text">Read More</span> <span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include __DIR__ . '/assets/includes/footer.php'; ?>
  </div>
  <?php include __DIR__ . '/assets/includes/scripts.php'; ?>
  </script>
</body>

</html>