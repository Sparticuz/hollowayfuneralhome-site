<?php get_header(); ?>
<div id="content" class="ten columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h3><?php the_title(); ?></h3>

			<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

			</div>

		</div>

		<?php endwhile; endif; ?>
</div>
<div id="sidebar"></div>
<?php get_footer(); ?>
