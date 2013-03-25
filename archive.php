<?php
 get_header();
?>


    <div class="caja art conjuntos">
    
        <div class="col3 social">
        
            <p class="btnlight">
            	<a href="http://rgarcia.cl" title="Volver al Home" alt="Volver al Home">Volver</a>
            </p>
            
            <ul>
            	<li><?php wp_tag_cloud( 'smallest=9&separator=  /  &largest=16&number=20&orderby=name&show_count=1&title_li=' ); ?></li>
            	<li><p><?php get_archives('monthly','','custom','',' /'); ?></li>
            </ul>
        
        </div>
        
        <div class="caja col8 final">
        
			<?php if (have_posts()) : ?>
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>   
            <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
            <h3 class="subt">Art&iacute;culos bajo la etiqueta<span> &#8216;<?php single_tag_title(); ?>&#8217;</span></h3>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <h3 class="subt">Art&iacute;culos de <span>&#8216;<?php the_time('F jS, Y'); ?>&#8217;</span></h3>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <h3 class="subt">Art&iacute;culos de <span>&#8216;<?php the_time('F, Y'); ?>&#8217;</span></h3>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <h3  class="subt">Art&iacute;culos del a&ntilde;o<span>&#8216;<?php the_time('Y'); ?>&#8217;</span></h3>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <h3 class="pagetitle">Author Archive</h3>
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <h3 class="pagetitle">Blog Archives</h3>
            <?php } ?>                 
            
            <?php while (have_posts()) : the_post(); ?>                      
            <div class="post border-bottom" <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <p><?php the_time('j F, Y') ?> &nbsp; &mdash;	&nbsp; <?php comments_popup_link('Sin comentarios &#187;', '1 comentario', '% comentarios'); ?> &nbsp; &mdash; &nbsp; <?php the_tags('Tags: ', ' &ndash; ', '<br />'); ?> </p>							                          
            
            </div>
            <?php endwhile; ?>                   
            <?php endif; ?> 
        
        </div>
    
    </div>

<!-- Main fin -->

<?php get_footer(); ?>          

             
            
            
            