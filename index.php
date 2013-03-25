<?php
 get_header();
?>

		<!-- Main -->
		<div class="home">

			<div class="post  border-bottom">
            
				<?php query_posts('showposts=1'); ?>                   
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            
                    <div class="principal border-bottom2">
                    
                        <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                        
                        <ul class="social">
                        
                            <li><?php the_time('j F, Y') ?> &mdash;</li>
                            <li><?php the_tags('Tags: ', ', '); ?> &mdash;</li>
                            <li><?php comments_popup_link('Sin comentarios &#187;', '1 comentario', '% comentarios'); ?></li>
                        
                        </ul>
                        
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                        
                        <div class="bajadaPost">
                        
                            <p>
                            <!-- Place this tag in your head or just before your close body tag -->
                            <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
                            {lang: 'es', parsetags: 'explicit'}
                            </script>
                            
                            <!-- Place this tag where you want the +1 button to render -->
                            <g:plusone href="rgarcia.cl"></g:plusone>
                            
                            <!-- Place this render call where appropriate -->
                            <script type="text/javascript">gapi.plusone.go();</script>
                            
                            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                            </p>
                            
                            <p class="btnlight"><a href="<?php the_permalink() ?>" rel="bookmark">Leer...</a></p>
                            
                        </div>
                      
                    </div>  
                          
                <?php endwhile;?>
                <?php endif; ?>
                    
                
                
                <?php query_posts('offset=1&showposts=3'); ?>                   
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                
                    
                    <div class="principal border-bottom2">
              
                      <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        <ul class="social">
                        
                            <li><?php the_time('j F, Y') ?> &mdash;</li>
                            <li><?php the_tags('Tags: ', ', '); ?> &mdash;</li>
                            <li><?php comments_popup_link('Sin comentarios &#187;', '1 comentario', '% comentarios'); ?></li>
                        
                        </ul>                 
                
                    </div>
                
                <?php endwhile;?>
                <?php endif; ?>                        
            
				<p class="btn"><a href="<?php bloginfo('url') ?>/?page_id=141">Todos los art&iacute;culos</a></p>
			
            </div>
  
			<div class="socialme">
            
                <div class="border-bottom">
                
                    <div class="caja subt">
                    
                        <h1 id="twitter" name="twitter">Twitter<span><a href="https://twitter.com/r_garcia">@r_garcia</a></span></h1>
                    
                        <p><a href="#top" name="top" class="anchorLink">Arriba</a></p>
                    
                    </div>
                    
                    <p class="txt-subt"><?php
                            
                        // Your twitter username.
                        $username = "r_garcia";
                        
                        // Prefix - some text you want displayed before your latest tweet.
                        // (HTML is OK, but be sure to escape quotes with backslashes: for example href=\"link.html\")
                        $prefix = "";
                        
                        // Suffix - some text you want display after your latest tweet. (Same rules as the prefix.)
                        $suffix = "";
                        
                        $feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=1";
                        
                        function parse_feed($feed) {
                            $stepOne = explode("<content type=\"html\">", $feed);
                            $stepTwo = explode("</content>", $stepOne[1]);
                            $tweet = $stepTwo[0];
                            $tweet = str_replace("&lt;", "<", $tweet);
                            $tweet = str_replace("&gt;", ">", $tweet);
                            return $tweet;
                        }
                        
                        $twitterFeed = file_get_contents($feed);
                        echo stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);
                    ?></p>
                
                </div>

        	</div>          

		</div>		
        <!-- Main fin -->
		
		<?php get_footer(); ?>          

             
            
            
            