<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
<?php get_header(); ?>
<div class="container-fluid " >

      <!--Card-->


<article>
      <div class="container" >
        <div class="row">
          <div class="col-lg-10 col-md-10 mx-auto">
         
            <div class="card">
                <div class="card-body">
                    <code>
                <?php 
                $url = home_url();
                ?>
                <a href="<?php echo esc_url( $url ); ?>">Home </a>/
                <?php
                 the_category( ' / ' ); ?>
                 </code>
                <br><br>
                    <span itemprop="articleBody"><?php the_content(); ?></span>
                
                        <hr width="50%">
                        <p class="mt-3 text-uppercase d-flex justify-content-center">
                    <?php the_tags( '<button type="button" class="d-flex justify-content-center btn btn-lg btn-info">', ' </button> <button type="button" class="btn btn-lg btn-info">', '</button>' ); ?>
</p>
                </div>

            </div>
            <hr

            <div class="card">
                <div class="card-body">
                    <span itemprop="comments">
                    <?php comments_template(); ?>
                
                    </span>
                

                        <hr width="50%">


                </div>

            </div>
            
            <p class="mt-3 pagination text-uppercase d-flex justify-content-center">
            <?php previous_post_link('%link', '<button type="button" class="btn btn-lg btn-info text-center text-uppercase">Previous </button>'); ?>
                
            <?php next_post_link('%link', '<button type="button" class="btn btn-lg btn-info text-center text-uppercase"> Next</button>'); ?> 
</p>
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
