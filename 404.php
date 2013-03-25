
<?php include ('headerBASE.php'); ?>

	<div class="caja error">
		<h1>!Felicidades&iexcl;. Acabas de experimentar el famoso Error 404.</h1>
    	<p>Quiz&aacute; quieras <a href="http://rgarcia.cl" alt="Volver al Inicio" title="Volver al Inicio">volver al inicio del sitio</a>, revisar mi &uacute;ltimo art&iacute;culo llamado <?php query_posts('showposts=1'); ?>                   
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php endwhile;?>
                <?php endif; ?> y recuerda que puedes encontrarme en Twitter como <a href="https://twitter.com/r_garcia" title="Ir a mi Twitter">@r_garcia</a></p>
    </div>




