<?php
/**
 * @package WordPress
 * @subpackage LatourTheme
 */

get_header(); ?>

	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : ?>
			<div class="hphdr">
				<h3>Good for Everything!</h3>
			Hand crafted with fair trade chocolate, local ingredients and earth friendly packaging.
				<div class="hpimg"></div>
			</div>

		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata">
				<?php the_time('F jS, Y') ?> | <?php the_tags('Tags: ', ', ', '<br />'); ?> Category: <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>
