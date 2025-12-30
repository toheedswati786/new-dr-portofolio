    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script> 
    <script src="assets/js/data-animation.js"></script>
    <script src="assets/js/bxslider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/video/lg-video.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/fullscreen/lg-fullscreen.umd.min.js"></script>
    <!-- main-js -->
    <script src="assets/js/script.js"></script>
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title " style="font-size: 40px;font-weight:550; padding: 5px;" id="exampleModalToggleLabel">Contact US</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/mail" method="post">
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="mb-3">
                        <label for="name" class="col-form-label ">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="col-form-label">Phone:</label>
                        <input type="tel" name="phone" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" name="message" id="message-text" required></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="theme-btn btn-three" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ContactModalToggle" aria-hidden="true" aria-labelledby="ContactModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title " style="font-size: 40px;font-weight:550; padding: 5px;" id="ContactModalToggleLabel">Contact US</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/mail" method="post">
        <div class="modal-body">
            <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div class="content-box d_block mr_30">
                                <div class="sec-title">
                                    <h2>Contact Us</h2>
                                </div>
                                <div class="form-inner">
                                    <form action="index.html" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="name" placeholder="Name" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="phone" placeholder="Phone" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="msg" placeholder="Message" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 message-btn">
                                                <button type="submit" class="theme-btn btn-one"><i class="icon-7"></i>Let's Get To Work</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                            <div data-animation-box="" class="image-box">
                                <figure data-animation-text="" class="overlay-anim-black-bg image" data-animation="overlay-animation"><img src="assets/images/resource/updated-contact-1.jpg" alt=""></figure>
                            </div>
                        </div>
        </div>
        <div class="modal-footer">
            <button class="theme-btn btn-three" data-bs-target="#ContactModalToggle2" data-bs-toggle="modal">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>