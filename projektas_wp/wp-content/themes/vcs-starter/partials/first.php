<?php 
$image1 = get_field('ho_background_image');
?>
<section id="first" class="first-page"style="background-image: url(<?php echo $image1['sizes']['large']?>);">
	<div id="first-overlay" class="overlay">
		<section class="container flex-container">
			<div class="middle-content">
				<div class="inner">
					<h1><?php the_field('ho_company_name'); ?></h1>
					<h2><?php the_field('ho_company_services'); ?></h2>
				</div>
			</div>
		</section>
		<!-- Middle conteiner end -->
		<!-- Bottom bar start -->
		<footer class="container flex-container lower">
			<div class="flex-container">
				<?php
					if(have_rows('ho_main_goals')):		 	
					    while(have_rows('ho_main_goals')) : the_row();
					        ?>
					        	<p><?php the_sub_field('short_goal') ?></p>
					        <?php
					    endwhile;
					endif;
				?>
			</div>
		</footer>
		<!-- Bottom bar end -->
	</div>
</section>