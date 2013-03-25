
<?php
/* Template Name: contacto-template */
                  
        
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	
	<div class="post col-b" <?php post_class() ?> id="post-<?php the_ID(); ?>">
						
		<?php the_content(''); ?>
	
	</div>	

	<?php endwhile; ?>                    
	<?php endif; ?>
                                        
