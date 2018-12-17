<?php get_header(); ?>

	
<section class="page-section intro" style="background-image:url('<?php the_field( 'cover_image');?>');">

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="logo" style="background-image:url('<?php the_field( 'client_logo');?>');"> </div>
				<p><?php the_field( 'description');?></p>

				<?php if( have_rows('call_to_actions') ):?>

					<?php while ( have_rows('call_to_actions') ) : the_row(); ?>

						<?php 

						$link = get_sub_field('button');
					
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : 'self';
							?>
							<a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
						<?php endif; ?>
						
					<?php endwhile; ?>

						<?php endif; ?>

				

			</div>
		</div>
	</div>
	
</section>	

<?php if( have_rows('section') ):?>


	<?php while ( have_rows('section') ) : the_row(); ?>
		
			

			<?php if(get_sub_field('background_type')=='image'): ?>
				<section class="case-section <?php the_sub_field('contrast')?>" style="background-image:url('<?php the_sub_field( 'background_image');?>');">
						
					<?php the_sub_field('editor')?>

				</section>

			<?php endif; ?>

			<?php if(get_sub_field('background_type')=='video'): ?>
				<section class="page-section <?php the_sub_field('contrast')?>" style="">
						
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
				<section class="page-section <?php the_sub_field('contrast')?>" style="background-color:<?php the_sub_field( 'background_color');?>;">
						
					<?php the_sub_field('editor')?>

				</section>

			<?php endif; ?>
			
		
	
	<?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
