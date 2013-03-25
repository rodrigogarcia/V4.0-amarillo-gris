<?php
/**
 * @package WordPress
 * @subpackage mínimo01
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<?php $customStyles = get_post_meta($post->ID, "customStyles", true);
	if (!empty($customStyles)) { ?>

<!--[if gte IE 6]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie6.css" media="screen" type="text/css" />
<![endif]-->

	<?php } ?>
			
	<title>

		<?php
		if (is_home()) {
			echo bloginfo('name');
		} elseif (is_404()) {
			echo '404 Not Found';
		} elseif (is_category()) {
			echo 'Category:'; wp_title('');
		} elseif (is_search()) {
			echo 'Search Results';
		} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
		} else {
			echo wp_title('');
		}
		?>
		
	</title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
			 
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>		  
	<?php wp_head(); ?>				

	 <script type="text/javascript">
	 (function ($) {
	 $.fn.vAlign = function() {
	 return this.each(function(i){
	 var h = $(this).height();
	 var oh = $(this).outerHeight();
	 var mt = (h + (oh - h)) / 2;
	 $(this).css("margin-top", "-" + mt + "px");
	 $(this).css("top", "50%");
	 $(this).css("position", "absolute");
	 });
	 };
	 })(jQuery);

	 (function ($) {
	 $.fn.hAlign = function() {
	 return this.each(function(i){
	 var w = $(this).width();
	 var ow = $(this).outerWidth();
	 var ml = (w + (ow - w)) / 2;
	 $(this).css("margin-left", "-" + ml + "px");
	 $(this).css("left", "50%");
	 $(this).css("position", "absolute");
	 });
	 };
	 })(jQuery);

	$(document).ready(function() {
	 $("#content").vAlign();
	 $("#content").hAlign();
	 });
	 </script>
	 
<!--[if IE 6]>
<script src="DD_belatedPNG.js"></script>
<script>
/* EXAMPLE */
DD_belatedPNG.fix('.transp');

/* string argument can be any CSS selector */
/* .png_bg example is unnecessary */
/* change it to what suits you! */
</script>
<![endif]--> 	 

    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui-1.8.custom.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.anchor.js"></script> 
</head>
	
<body name="top" id="top" <?php body_class(); ?>>	  
  <div id="contenedor" class="verGrillaa">
    <!-- Header -->header INTERIORRRRRRRRRRRRRRRRR
    <div class="caja head">
      <div class="col3">
        <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
      </div>    
      <div class="col8">
         <p><?php bloginfo('description'); ?></p>
      </div> 
      <div class="col1">
      </div>
    </div>
    <!-- Header fin -->