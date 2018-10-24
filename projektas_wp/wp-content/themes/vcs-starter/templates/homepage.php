<?php

/* Template Name: Homepage */

get_header();

?>

<!-- Prijungiame dalinius failus is partials katalogo -->

<?php 
get_template_part('partials/first');
get_template_part('partials/second');
get_template_part('partials/third');
get_template_part('partials/fourth');
get_template_part('partials/fifth');
get_template_part('partials/sixth');
get_template_part('partials/seventh');
?>
<!-- Start Point -->
<!-- <h1>Esame homepage.php</h1> -->
<?php get_footer(); ?>