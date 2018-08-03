
<!-- Footer -->
<footer style="background-color: rgb(60, 60, 65);color:white;text-decoration:none;" class="page-footer font-small mt-4">

    <div style="background-color: #6351ce;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-pinterest-p white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-4"  >

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-0 mt-2">

          <!-- Content -->
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold mb-1 mt-0">PROMISE</h6>
          <hr class="deep-purple accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p class="mt-0">To Spread our Knowledge of Content Optimization, Curation and Marketing..</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-0 mt-2">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold mb-1 mt-0">Particulars</h6>
          <hr class="deep-purple accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer_menu' ) ); ?>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-0 mt-2">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold mb-1 mt-0">Useful links</h6>
          <hr class="deep-purple accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Privacy Policy</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold mb-1 mt-0">Contact</h6>
          <hr class="deep-purple accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> Virginia, US</p>
            <p>
            <i class="fa fa-phone mr-3"></i> +12762290226</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> reachme@yolodigi.com</p>
          <!-- <p>
            <i class="fa fa-phone mr-3"></i> + 01 276 229 0226</p>
          <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p> -->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?php echo Date('Y'); ?>  Copyright:
      <a href="https://yolodigi.com"> <?php bloginfo('name'); ?></a>
    </div>
    <!-- Copyright -->

  </footer>
  <?php wp_footer(); ?> 
  <!-- Footer -->
<!-- {% endblock %} -->


    <!-- FIRST Footer -->
    <!-- <footer class="" style="background-color: #6351ce;" >
      <div class="container ">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://twitter.com/jmrlgg">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://facebook.com/jeremylmassey">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/jmrlgg">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; YoloDigi || <a class="text-muted" style="text-decoration: none" href="https://github.com/BlackrockDigital/startbootstrap-clean-blog">CleanBlog</a> &trade; </p>
          </div>
        </div>
      </div>
    </footer> -->

 <!-- Bootstrap core JavaScript -->
    <!-- <script src="{% static 'vendor/jquery/jquery.min.js' %}"></script>
    <script src="{% static 'vendor/bootstrap/js/bootstrap.bundle.min.js' %}"></script> -->

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mdb.js"></script>

    <!-- Custom scripts for this template -->
    <!-- <script src="{% static 'js/clean-blog.min.js' %}"></script> -->


  </body>

</html>