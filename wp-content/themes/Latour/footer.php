<?php
/**
 * @package WordPress
 * @subpackage PainReleaseCenter
 */
?>
</div>
<div id="rightbar">
	<?php
	//get_sidebar('right');
	?>
</div>

		<div id="menu">
			<ul>
				<?php 
				wp_list_pages('hide_empty=0&sort_column=menu_order&title_li=&depth=1'); 
				?>	
			</ul>
		</div>

<hr />

<div id="footer" role="contentinfo">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<p>
		<?php bloginfo('name'); ?> by Shalini Latour | 513.591.0085 | <a href="mailto:shalini@chocolatslatour.com" title="Email Shalini">shalini@chocolatslatour.com</a><br />
		Copyright Chocolats Latour &copy;2010 | Designed and Developed in the <a href="http://madsciencedept.com" title="Mad Science Department">Mad Science Department</a><br />
		<a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
</div>
</div>

<?php ?>

		<?php wp_footer(); ?>
		<?php //add tracking and custom comment here ?>
</body>
</html>
