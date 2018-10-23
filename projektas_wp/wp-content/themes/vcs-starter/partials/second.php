<section id="second" class="second-page">
	<div class="overlay">
		<header class="about-us">
			<div class="page-name">
				<h2><?php the_field('ht_about_us_title'); ?></h2>
				<p>
					<span><?php the_field('ht_about_us_name'); ?></span> – <?php the_field('ht_about_us_text'); ?>
				</p>
			</div>				
		</header>
		<div class="mid-container">
			<div class="top-info">
				<?php
					if(have_rows('ht_mision_vision')):		 	
					    while(have_rows('ht_mision_vision')) : the_row();		        
					        ?>
					        	<div class="mision-vision">
									<h3><?php the_sub_field('mv_name'); ?></h3>
									<p><?php the_sub_field('mv_text'); ?>
									</p>
								</div>
					        <?php
					    endwhile;
					endif;
				?>			
			</div>
		</div>
		<div class="bottom-info">
			<div class="vertybes">
				<h3><?php the_field('ht_values'); ?></h3>
			</div>
			<div class="vertybiu-list">

				<?php 
				if(have_rows('ht_values_collum_repeater')):		 	
				    while (have_rows('ht_values_collum_repeater')) : the_row();
				    	$image2 = get_sub_field('value_image');
				    	// dump($image2);
				    	?>
				    	<div style="background-image: url(<?php echo $image2['sizes']['medium']?>);" class="vert_sarasas clnt">
				    		<div class="background">
								<h3><?php the_sub_field('value_title'); ?></h3>
								<ul class="container-list tci">
									<?php 
										if( have_rows('values_text_repeater')): 	
										    while ( have_rows('values_text_repeater')) : the_row();
										       ?>
										       		<li><p><?php the_sub_field('value_content'); ?></p></li>
										       <?php 							        
										    endwhile;
										endif;
									?>
								</ul>
							</div>
						</div>
				    	<?php 				        
				    endwhile;
				endif;
				 ?>
			</div>
		</div>					
		<footer class="statistika">
			<?php
				if(have_rows('ht_statistics')):		 	
				    while(have_rows('ht_statistics')) : the_row();			        
				        ?>
				        	<div class="statistika-column flex-container">
								<h2><?php the_sub_field('statistic_number'); ?></h2>
								<p><?php the_sub_field('statistic_title'); ?></p>
								<?php the_sub_field('icon'); ?>
							</div>
				        <?php
				    endwhile;
				endif;
			?>			
		</footer>		
	</div>
</section>