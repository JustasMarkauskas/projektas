<section id="seventh" class="seventh-page">
	<div class="seventh-overlay">
		<div class="contact-container">
			<div class=contact>
				<h2><?php the_field('hseven_page_name'); ?></h2>
				<?php
					if(have_rows('hseven_contact_info_repeater') ): 	
					    while (have_rows('hseven_contact_info_repeater')) : the_row();
					    	?>
					    		<p><?php the_sub_field('contact_information'); ?></p>
					        <?php					        
					    endwhile;
					endif;
				?>							
			</div>
			<div class="contact-us" ><h4>Susisiekite:</h4></div>			
			<?php
			if (have_posts()):
				while (have_posts()):
					the_post(); 
					?>
						<div class="mail">
							<?php echo do_shortcode(get_field('hseven_contact_form_shortcode')); ?>
						</div>
					<?php 
				endwhile;
			endif;
			?>			
			</div>
			<div class="map">
				<div class="mapouter">				
					<div class="gmap_canvas">
						<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=kalvariju%20135&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
						<a href="https://www.embedgooglemap.net"></a>
					</div>
				<style>
				</style>
			</div>
		</div>
	</div>
</section>