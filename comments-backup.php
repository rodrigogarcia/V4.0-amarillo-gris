<?php

if ( post_password_required() ) : ?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

		   
	<!-- You can start editing here -->                    
	
    <div class="caja comments">
		<?php if ( have_comments() ) : ?>
		<h3><?php comments_number('No hay comentarios... Puedes ser el primero en comentar!', '1 comentario', '% comentarios' );?> en</h3>
        <p>"<?php the_title(); ?>"</p>
		<!-- Esto inserta los comentarios de los usuarios --> 
		<div class="coms">
			<?php $i = 0; ?> 
			<?php if($comments) : ?>  
				<ol>  
					<?php foreach($comments as $comment) : ?> 
					<?php $i++; ?>
					<li class="<?php if ($comment->comment_author_email == "rodrigo.conceptual@gmail.com") echo 'author'; else echo $oddcomment; ?> item" id="comment-<?php comment_ID() ?>"> 
						
						<?php if ($comment->comment_approved == '0') : ?>  
							<p>Your comment is awaiting approval</p>  
						<?php endif; ?>                                          
						<div class="col2 comment-author vcard">
							<span class="count"><?php echo $i; ?></span>
							<?php echo get_avatar($comment,$size='70'); ?>
						</div>
						
						<div class="col7 final">
							<?php printf(__('<cite class="fn"><strong>%s</strong></cite> <span class="says">dice:</span>'), get_comment_author_link()) ?>                  
							<?php if ($comment->comment_approved == '0') : ?>
							<em><?php _e('Tu comentario est&aacute; en espera de moderaci&oacute;n') ?></em>
							<?php endif; ?>
							<p class="comment-meta commentmetadata"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?><?php edit_comment_link(__('(Edit)'),' ','') ?></p>

							<?php comment_text() ?>
						</div>
				   </li>  
				   <?php endforeach; ?>  
			   </ol>  
			   <?php else : ?>  
				   <p>No hay comentarios todav&iacute;a</p>  
			   <?php endif; ?> 
		</div>
        
        <div class="formulario" name="comenta" id="comenta">
		  <?php else : // this is displayed if there are no comments so far ?>
            <?php if ( comments_open() ) : ?>
                <!-- If comments are open, but there are no comments. -->
             <?php else : // comments are closed ?>
                <!-- If comments are closed. -->
                <p class="nocomments">Los comentarios estan cerrados.</p>
            <?php endif; ?>
          <?php endif; ?>
          <?php if ( comments_open() ) : ?>
          <div id="respond" class="homeform">
            <div class="cancel-comment-reply">
                <small><?php cancel_comment_reply_link(); ?></small>
            </div>
            
            <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
            <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
            <?php else : ?>             
            <h3>Comenta</h3>        
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <?php if ( is_user_logged_in() ) : ?>
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
                <?php else : ?>
                <p><label for="author">Tu nombre <?php if ($req) echo "(*)"; ?><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /></label>
                <label for="email">Tu email <?php if ($req) echo "(*)"; ?><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo "aria-required='true'"; ?> /></label>
                <label class="final" for="url">&iquest;Tienes sitio?<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" /></label></p>
                <?php endif; ?>
                <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
                <p><textarea name="comment" id="comment" tabindex="4"></textarea></p>
                <p class="btn"><input name="submit" type="submit" id="submit" tabindex="5" value="Enviar" /></p>
                <?php comment_id_fields(); ?>
                <?php do_action('comment_form', $post->ID); ?>
            </form>
            <?php endif; // If registration required and not logged in ?>
          </div>
          <?php endif; // if you delete this the sky will fall on your head ?>
		</div>
    </div>
	<!-- FIN COMENTARIOS -->