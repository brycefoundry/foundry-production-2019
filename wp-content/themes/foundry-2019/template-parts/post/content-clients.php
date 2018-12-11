<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Foundry
 * @since 1.0
 * @version 1.2
 */

?>

<?php

$gallerycount = 0;
 	
?>


<section style="height: 100vh; background-image:url('<?php the_field( 'cover_image');?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<div class="container">
		<div class="row">
			<div class="col"></div>
		</div>
	</div>
	
</section>	

<?php if( have_rows('section') ):?>


	<?php while ( have_rows('section') ) : the_row(); ?>
		
			

			<?php if(get_sub_field('background_type')=='image'): ?>
				<section class="<?php the_sub_field('contrast')?>" style="background-image:url('<?php the_sub_field( 'background_image');?>');">
						
					<?php the_sub_field('editor')?>

				</section>

			<?php endif; ?>

			<?php if(get_sub_field('background_type')=='video'): ?>
				<section class="<?php the_sub_field('contrast')?>" style="">
						
					<?php the_sub_field('editor')?>


					<div class="video">
						<video autoplay muted loop>
						  <source src="<?php the_sub_field('background_video_mp4'); ?>" type="video/mp4">
						  <source src="<?php the_sub_field('background_video_ogg'); ?>" type="video/ogg">
						  <source src="<?php the_sub_field('background_video_webm'); ?>" type="video/webm">
						Your browser does not support the video tag.
						</video>
						
					</div>


				</section>

			<?php endif; ?>

			<?php if(get_sub_field('background_type')=='color'): ?>
				<section class="<?php the_sub_field('contrast')?>" style="background-color:<?php the_sub_field( 'background_color');?>;">
						
					<?php the_sub_field('editor')?>

				</section>

			<?php endif; ?>
			
		
	
	<?php endwhile; ?>

<?php endif; ?>


								
			
							
					

		
		
		
	


	


