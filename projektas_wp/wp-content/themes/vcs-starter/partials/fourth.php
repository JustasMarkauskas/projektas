<?php 
$image4 = get_field('hf_background_image');
?>

<section id="fourth" class="fourth-page" style="background-image: url(<?php echo $image4['sizes']['large']?>);">
	<div class="overlay partner">
		<div class="partner-text">
			<h2><?php the_field('hf_page_name'); ?></h2>
			<p><?php the_field('hf_for_partners'); ?>
		</div>
	</div>
</section>


