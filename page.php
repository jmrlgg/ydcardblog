<?php 
if ( is_front_page() ) :
    get_header();
elseif ( is_page( 'About' ) ) :
    get_header( 'about' );
else:
    get_header();
endif;
?>
<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>


<div class="container-fluid " >

      <!--Card-->


<article>
      <div class="container" >
        <div class="row">
          <div class="col-lg-10 col-md-10 mx-auto">
    
            <div class="card">
                <div class="card-body">
                    <span itemprop="articleBody"><?php the_content(); ?></span>
                
                        <hr width="50%">

                    <?php the_tags( '<button type="button" class="btn btn-lg btn-info">', ' </button> <button type="button" class="btn btn-lg btn-info">', '</button>' ); ?>

                </div>
            </div>
              <!-- {% if messages %}
              <ul class="messages">
                  {% for message in messages %}
                  <li{% if message.tags %} class="{{ message.tags }}"{% endif %}>{{ message }}</li>
                  {% endfor %}
              </ul> -->
              <!-- {% endif %}
            {% if user.is_authenticated %}
            <a href="{% url 'post_edit' pk=post.pk %}">222
                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Edit
                
            </a></button>
            {% endif %} -->
          </div>
        </div>
    </div>
</article>
    <?php endwhile; ?>
<?php else : ?>
 <p><?php __('No Posts Found!'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
