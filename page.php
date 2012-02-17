<?php get_header(); ?>
<div id="content" class="ten columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h3><?php the_title(); ?></h3>

			<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>

		<?php //comments_template(); ?>

		<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
