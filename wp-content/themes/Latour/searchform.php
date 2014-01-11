<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>/" >
	<div><label class="screen-reader-text" for="s">Search for:</label>
	<input type="text" class="text inputblur" value="<?php if(get_search_query()): the_search_query(); else: echo ('SEARCH'); endif; ?>" name="s" id="s" />
	<input name="submit" id="searchsubmit" value="Search" type="image" src="<?php echo get_bloginfo('template_directory'); ?>/images/magnifier2-gray.gif" />

	</div>
	</form>