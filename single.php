<?php
 get_header();
?>

		<!-- Main -->
		<div class="single">
                 
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
            <div class="post art">
        
                <div class="col3 social sidebar">
                
                    <p class="btnlight">
                        <a href="http://rgarcia.cl" title="Volver al Home" alt="Volver al Home">Volver</a>
                    </p>
          
                </div>
                     
              
                <div class="col8 final">
              
              		<h1><?php the_title(); ?></h1>
              
                    <ul class="social">
                    
                        <li><?php the_time('j F, Y') ?> &mdash;</li>
                        <li><?php the_tags('Tags: ', ', '); ?> &mdash;</li>
                        <li><?php comments_popup_link('Sin comentarios &#187;', '1 comentario', '% comentarios'); ?></li>
                    
                    </ul>
              
              
                    <div class="excerpt border-bottom">
            
                      <?php the_excerpt(); ?>
            
                    </div>
            
                    <div class="content">
            
                        <?php the_content(); ?>
            
                    </div>
            
                    <div class="comments">
            
                        <?php comments_template(); ?>
            
                    </div>
                
                
                </div>
            
            </div>
            
			<?php endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
            <!-- Main fin -->

		</div>

		<?php get_footer(); ?> 