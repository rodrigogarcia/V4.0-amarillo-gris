<?php
/* Template Name: Todos-template */?>

<?php
 get_header();
?>

		<!-- Main -->
		<div class="home">

            <div class="caja art conjuntos">
            
                <div class="col3 social sidebar">
                
                    <p class="btnlight">
                        <a href="http://rgarcia.cl" title="Volver al Home" alt="Volver al Home">Volver</a>
                    </p>
    
                    <ul>
                        <li><?php wp_tag_cloud( 'smallest=9&separator=  /  &largest=16&number=20&orderby=name&show_count=1&title_li=' ); ?></li>
                        <li><p><?php get_archives('monthly','','custom','',' /'); ?></li>
                    </ul>
                
                </div>
                  
                <div class="caja col8 final">
                
                  <h3>Todos los art&iacute;culos</h3>  
                  <?php query_posts('cat=18&showposts=1000'); ?>                   
                  <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>                
                
                  <div class="post border-bottom" <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    
                    <ul class="social">
                    
                        <li><?php the_time('j F, Y') ?> &mdash;</li>
                        <li><?php the_tags('Tags: ', ', '); ?> &mdash;</li>
                        <li><?php comments_popup_link('Sin comentarios &#187;', '1 comentario', '% comentarios'); ?></li>
                    
                    </ul>							                          
                
                  </div>
                  <?php endwhile; ?>                   
                  <?php endif; ?>  
                
                </div>
                         
            </div>

		</div>
<!-- Main fin -->

<?php get_footer(); ?>          

             
            
            
            