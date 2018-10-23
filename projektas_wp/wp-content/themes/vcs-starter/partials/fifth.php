<?php 
$image5 = get_field('hfi_background_image');
?>

<section id="fifth" class="fifth-page" style="background-image: url(<?php echo $image5['sizes']['large']?>);">
	<div class="overlay penktas">
		<div class="center-container">
			<header class="linkai">
				<h2><?php the_field('hfi_page_name'); ?></h2>
			</header>
			<div class="nuorodos">
				<ul class="container-list">
					<?php
						if(have_rows('hfi_link_field_repeater') ): 	
						    while (have_rows('hfi_link_field_repeater')) : the_row();
						    	$link = get_sub_field('link');
						    	if($link['target']=="_blank"){
						    		$target = 'target="_blank"';

						    	}else{
						    		$target = '';
						    	}
						    	// dump($link);
						    	?>
						    		<li>
						    			<a href="<?php echo $link['url']; ?>" <?php echo $target; ?>>
						    			<?php echo $link['title']; ?>
						    			</a>
						    		</li>
						    	<?php						        
						        the_sub_field('sub_field_name');
						    endwhile;
						endif;
					?>					
				</ul>
			</div>
		</div>
	</div>
</section>