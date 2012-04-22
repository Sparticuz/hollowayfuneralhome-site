</div>
<div class="row">
		<footer class="ten columns push-two">
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</footer>
</div>
	</div>

	<script type="text/javascript">
		
		jQuery(function($) {
			$(".size-thumbnail").each(function(index){
				var html;
				var parent = $(this).parent();
				html = "<div id='reveal-"+index+"' class='reveal-modal'>";
				html +="<img src='"+parent.attr('href')+"' />"
				html += "</div>";
				
				console.log(parent);
				
				parent.attr("data-reveal-id","reveal-"+index);
				
				console.log(html);
				$("body").append(html);
			});
		});
		
	</script>
	<?php wp_footer(); ?>

</body>

</html>