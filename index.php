<?php 
if ( is_front_page() ) :
  get_header();
elseif ( is_page( 'About' ) ) :
  get_header( 'about' );
else:
  get_header();
endif;
?>

<div class="container-fluid row">

  <!-- Content -->
  <!-- Deck of Cards -->

  <div class="card-deck p-2 mx-auto mr-3 col-lg-9" >

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
      <!--Card-->

      <div class="col-md-4 col-xl-4 mx-auto">
        <div class="card mb-4 mr-0 ml-0" style="max-height: 600px; min-height:450px; box-shadow: 5px 5px 5px grey;">
         
          <!--Card image-->
          <div class="view overlay">
              <!-- POST PHP image-->
          <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php echo wp_get_canonical_url(); ?>"><?php the_post_thumbnail('category-thumb', array( 'class' => 'card-img-top') ); ?>
          <?php } else { ?>
            <a href="{{ post.get_absolute_url }}"> <img style="width:strech;"src="<?php bloginfo('template_url'); ?>/img/blog_model.png" class="card-img-top" alt="sample image">
          <?php } ?>
              <!-- END PHP image-->
              <div class="mask rgba-white-slight waves-effect waves-light"></div>
            </a>
          </div>
          <!--/.Card image-->
    
          <!--Button-->
            <a href="<?php echo wp_get_canonical_url(); ?>">
            <i class="float-right mr-4 mt-2 fas fa-chevron-right fa-lg fa-pull-right fa-border"></i></a>
        
    
          <!--Card content-->
          <div class="card-body">
            <!--Title-->
    
            
       
    
            
            <h4 class="card-title">
              <strong><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></strong>
            </h4>
          
            <hr>
            <!--Text-->
            <p class="card-text">
              
              <?php the_excerpt(); ?>
              </p>
          </div>
          <!--/.Card content-->
    
          <!-- Card footer -->
          <div class="mdb-color lighten-3 text-center">
            <ul class="list-unstyled list-inline font-small mt-3">
              <li class="list-inline-item pr-2 white-text">
                <i class="fa fa-clock pr-1"></i><?php the_time('F j, Y'); ?></li>
    
              <li class="list-inline-item pr-2">
                <a href="#" class="white-text">
                  <i class="fa fa-comments pr-1"></i><?php comments_number( '0', '1', '% ' ); ?></a>
              </li>
              <li class="list-inline-item pr-2">
                <a href="#" class="white-text">
                  <i class="fab fa-facebook pr-1"> </i>21</a>
              </li>
              <li class="list-inline-item pr-1">
                <a href="#" class="white-text">
                  <i class="fab fa-twitter pr-1"> </i>5</a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="white-text">
                  <i class="fa fa-user pr-1"> <?php the_author(); ?></i></a>
              </li>
            </ul>
          </div>
          <!-- Card footer -->
        </div>
       
        </div>
        <!--/.Card-->
    
      <!-- Main Content END -->
      <!--Grid column-->
     

  <?php endwhile; ?>
<?php else : ?>
 <p><?php __('No Posts Found!'); ?></p>
<?php endif; ?>
    </div>
    <!-- Main Deck of Cards-->
  <!-- End of Content -->
  <section id="sidebar" class="col-md-3">

  <?php if(is_active_sidebar('sidebar')): ?>
    <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
                            <!-- Grid row -->
                </section>

</div>
<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
<!-- MAIN END -->
<!-- 
{% block footer %} -->
<?php get_footer(); ?>
