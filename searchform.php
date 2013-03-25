<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
<input type="submit" class="input" id="searchsubmit" value="Buscar" />
</div>
</form>
