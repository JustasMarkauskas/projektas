<?php 
$image6 = get_field('hsix_bacground_image');
?>


<section id="sixth" class="sixth-page" style="background-image: url(<?php echo $image6['sizes']['large']?>);">
	<div class="overlay">
		<div class="center7">
			<header class=karjera>
				<h2><?php the_field('hsix_page_name'); ?></h2>
				<p><?php the_field('hsix_page_intro'); ?></p>				
			</header>
			<?php
				if(have_rows('hsix_position_repeater') ): 	
				    while (have_rows('hsix_position_repeater')) : the_row();
				    	?>
				    		<div class="mid-container">
								<div class=flex-container>
									<div class="pozition">
										<h3><?php the_sub_field('position_name'); ?></h3>
									</div>
								</div>
								<div class="flex-container">
									<div class="nature">
										<h4><?php the_sub_field('position_description'); ?></h4>
										<ul>
											<?php 
												if(have_rows('description_repeater') ): 	
												    while (have_rows('description_repeater')) : the_row();
												    	?>
												    		<li><?php the_sub_field('list'); ?></li>
												    	<?php
											    	endwhile;
												endif; 
											?>
										</ul>
									</div>
									<div class="requirement">
										<h4><?php the_sub_field('position_requirement'); ?></h4>
										<ul>
											<?php 
												if(have_rows('requirement_repeater') ): 	
												    while (have_rows('requirement_repeater')) : the_row();
												    	?>
												    		<li><?php the_sub_field('requirement_list'); ?></li>
												    	<?php
											    	endwhile;
												endif; 
											?>
										</ul>
									</div>
								</div>
							</div>
				        <?php
				    endwhile;
				endif;
			?>			
			<footer>
				<?php
				if (have_posts()):
					while (have_posts()):
						the_post(); 
						?>
							<div class="cv-footer">
								<?php echo do_shortcode(get_field('hsixcv_form_shortcode')); ?>
							</div>
						<?php 
					endwhile;
				endif;
				?>				
			</footer>
		</div>
	</div>
</section>