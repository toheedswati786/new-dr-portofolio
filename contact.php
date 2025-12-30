<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/assets/includes/links.php'; ?>
  <style>
    .flip-vertical {
      transform: scaleX(-1);
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
          <div class="row align-items-center">
            <div class="col-lg-12">
              <h1 class="page_title mb-0">Сontact Us</h1>
            </div>
          </div>
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
      <section class="consultation_section section_space_lg" style="padding-top: 10px !important;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="section_heading">
                <h2 class="section_heading_text mb-0">
                  Get In Touch With Us
                </h2>
              </div>
              <form action="mailer.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="input_name">Name</label>
                      <input
                        id="input_name"
                        class="form-control"
                        type="text"
                        name="name"
                        placeholder="Your Name" />
                    </div>
                  </div>
                  <input type="hidden" name="form" value="done">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="input_phone">Phone</label>
                      <input
                        id="input_phone"
                        class="form-control"
                        type="tel"
                        name="phone"
                        placeholder="Mobile phone number" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="input_msg">Message</label>
                      <textarea id="input_msg"
                        class="form-control"
                        type="text"
                        name="message"
                        placeholder="Enter Your Message"></textarea>
                    </div>
                  </div>
                </div>
                <div class="btn_wrap pb-0">
                  <button type="submit" class="btn btn-primary">
                    <span class="btn_text" data-text="Get A Consultation">Get A Consultation </span><span class="btn_icon"><i class="fa-solid fa-arrow-up-right"></i></span>
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-6">
              <div class="image_widget">
                <img
                  src="assets/images/about/about_image_17-min.jpg" class="flip-vertical" style="border: 1px solid #41132b;"
                  alt="About Image - Talking Minds – Psychotherapist Site Template" />
                <div class="image_shape bg_secondary_light"></div>
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