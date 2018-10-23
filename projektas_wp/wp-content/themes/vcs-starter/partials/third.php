<section id="third" class="third-page">
	<div class="overlay">
		<header class="Paslaugos">
			<h2><?php the_field('hth_page_name'); ?></h2>
		</header>
		<div class="service-list">
			<?php
				if(have_rows('hth_service_list_repeater') ): 	
				    while (have_rows('hth_service_list_repeater')) : the_row();
				    	$image3 = get_sub_field('service_image');
				    	// dump($image3);
				    ?>	
				    	<div class="photo">
							<img src="<?php echo $image3['sizes']['medium_large'] ?>" alt="Truck" class="image">
							<div id="oversized1" class="middle">
								<div class="text">
									<p><?php the_sub_field('service_text'); ?></p>
								</div>
							</div>
						</div>
				    <?php    				     
				    endwhile;
				endif;
			?>			
		</div>
	</div>
</section>