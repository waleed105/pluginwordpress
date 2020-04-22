<?php get_header();?>

<div class="main--section">
<div class="container">

<!-- if for custom post typ 'post_type' => 'movies' -->

<?php 


$loop = new WP_Query(array('posts_per_page' => 5));
var_dump($loop->have_posts());
if ( $loop->have_posts() ) :
	
 while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<h2><?php echo get_the_title(); ?></h2>
<?php endwhile;
endif;






		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
		?>
	<?php        
			} // end while
		} // end if
		?>

		

</div>
</div>



<?php get_footer();?>