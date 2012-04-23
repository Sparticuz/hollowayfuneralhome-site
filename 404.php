<?php
//Send correct 404 error to browser and search engines
header($_SERVER["SERVER_PROTOCOL"], true, 404);
?>
<?php get_header(); ?>
<div id="content" class="ten columns">
	<div class="post">
		<h3>Error 404 - Page Not Found</h3>
		<div class="entry">
			Sorry, but that page was not found.
		</div>
	</div>
</div>
<?php get_footer(); ?>