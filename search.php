<?php
/**
 * @package WordPress
 */

			get_header(); ?>

			<div class="caja cuerpo" id="archive">
            
            	<div class="marco">
            
                    <div class="col-a">	
    
                        <div class="buscar">
                            
                            <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                        
                        </div>
       
                        
                        <div class="meses">
                                
                            <h2 class="subt">Art&iacute;culos por mes:</h2><p><?php get_archives('monthly','','custom','',' |'); ?></p>
                
                        </div>
                        
                        
                        <div class="tags">
                        
                            <h2 class="subt">Tags:</h2>
                        
                            <p><?php wp_tag_cloud( 'smallest=8&separator=  /  &largest=14&number=20&orderby=name&show_count=1&title_li=' ); ?></p>
                    
                        </div>  
                        
                    </div>

                    

                    <div class="caja articulo col-b">
                    
						<?php
                        $recentPosts = new WP_Query();
                        $recentPosts->query('showposts=5');
                        ?>
                    
                        <?php if (have_posts()) : ?> 
                        
                        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                        <?php /* If this is a category archive */ if (is_category()) { ?>
                        
                        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                        <h2 class="subt"><span>Art&iacute;culos bajo la etiqueta</span> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                        <h2 class="subt"><span>Art&iacute;culos de</span> &#8216;<?php the_time('F jS, Y'); ?>&#8217;</h2>
                        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                        <h2 class="subt"><span>Art&iacute;culos de</span> &#8216;<?php the_time('F, Y'); ?>&#8217;</h2>
                        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                        <h2  class="subt"><span>Art&iacute;culos del a&ntilde;o</span> &#8216;<?php the_time('Y'); ?>&#8217;</h2>
                        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                        <h2 class="pagetitle">Author Archive</h2>
                        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                        <?php /* If this is a tag archive */ } elseif( is_search() ) { ?>
                        <h2 class="subt"><span>Art&iacute;culos bajo la b&uacute;squeda</span> &#8216;<?php the_search_query() ?>&#8217;</h2>
                        <?php } ?> 
    

                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>                      
                        
                        <div class="post" <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        
                            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                            
                            <p class="metaArticulo"><?php the_time('j F, Y') ?> &nbsp; &mdash;	&nbsp; <?php comments_popup_link('Sin comentarios &#187;', '1 comentario', '% comentarios'); ?> &nbsp; &mdash; &nbsp; <?php the_tags('Tags: ', ' &ndash; ', '<br />'); ?> </p>
                            
                            <div><?php the_excerpt(); ?></div>								
                                                        
                        </div>
    
    
                        <?php endwhile; ?> 
                                 
                            
                        <?php endif; ?>
                                            
                    </div>
                 
                 </div>             
                            
			</div>	
            

            
            	

        <div class="caja footer">
        
			<!-- COMENTARIOS -->							
            <div class="caja todocomentarios" id="comments">
         
				<div class="marco" >
                
					<?php comments_template(); // Get wp-comments.php template ?>   
                        
				</div>
                

              
            </div>
            
            
			<!-- FIN COMENTARIOS -->

			<div class="pie marco">
				
				<?php get_footer(); ?>          
            
			</div>
            
		</div>  
    
    </body>

</html> 
         		