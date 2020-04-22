<?php get_header();?>

 <!-- main content -->

 <section id="content-section" class="grey-blue-bg">
   <div class="container">
     <div class="row">
   <!-- Blog section -->
      <div class="col-12 col-md-12 col-lg-8 blog-post"> 
		<?php 
			
		


		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
		?>
			<h1 class="blog-main-title" style="margin-top: 25px;">
				<?php the_title()?>
			</h1>
			
			<?php the_content();?>
		
		<?php			
			}
		}
		
		?>
<!--
<h3>Comments: </h3>
<div class="batoota-blog-comment"><?php //comments_template(); ?></div>
-->		
	   </div>
      <!-- blog section end -->
	  
     <?php get_sidebar();?>
   </div>
   
   <?php if( get_previous_posts_link() ) :

		previous_posts_link( '« Newer Entries' );

	endif; ?>

	<?php if( get_next_posts_link() ) :

		next_posts_link( 'Older Entries »', 0 );

	endif; ?>     
	
	
   </div>
 </section>

	 



<?php get_footer();?>

