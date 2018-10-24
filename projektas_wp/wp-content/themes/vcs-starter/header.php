<!DOCTYPE html>

<html> 
<head>	
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	<!-- First start -->
	<header id="top-nav" class="top-nav">
		<div class="container flex-container">
			<div class="logo">
				<a href="<?php echo site_url(); ?>">
					<?php
						if(get_field('op_logo_type', 'option')):
							$image = get_field('op_logo_image', 'option');
							// dump($image);
							?>
								<img src="<?php echo $image['sizes']['logo'] ?>" alt="<?php bloginfo('name'); ?>">
							<?php							
						else:
							the_field('op_logo_text', 'option');
						endif;
					?>
				</a>	
			</div>
			<div class="burger">
			<?php the_field('burger_icon');?>
			</div>
			<nav class="nav-bar">
				<?php 
					$args = [
						'menu_class' => 'flex-container topnavmenu',
						'container' => false,
						'theme_location' => 'primary-navigation'
					];
					wp_nav_menu($args);
				?>				
			</nav>
		</div>
	</header>