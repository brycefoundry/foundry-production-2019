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

<?php if(get_field('lock_option')=='locked'): ?>
	<div class="container locked">
		<div class="row">
			<div class="col-md-6">
	<?php 
	echo do_shortcode( ' [passster password="ember"][/passster] ' );
	
	?>
			</div>

			<div class="col-md-6">
				<h4 class="access-title">Get Access</h4>
				<p class="access-content">Enter your email address and we'll send you an access code for some of our more sensitive work. By entering your email you agree not to share this project.</p>
				<?php 
					echo do_shortcode( ' [yikes-mailchimp form="1"] ' );
				?>	
			</div>
		</div>	
	
	

	
	

	</div>

<?php endif; ?>





<section class="case-section intro" style="background-image:url('<?php the_field( 'cover_image');?>');">

	<div class="container">
		<div class="row">
			<h1><?php the_title(); ?></h1>
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
							<p><a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
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
				<section class="case-section <?php the_sub_field( 'title');?> <?php the_sub_field( 'background_type');?> <?php the_sub_field('contrast')?>" style="background-image:url('<?php the_sub_field( 'background_image');?>');">
						
					<?php the_sub_field('editor')?>

				</section>

			<?php endif; ?>

			<?php if(get_sub_field('background_type')=='video'): ?>
				<section class="case-section <?php the_sub_field( 'title');?> <?php the_sub_field( 'background_type');?> <?php the_sub_field('contrast')?>" style="">
						
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
				<section class="case-section <?php the_sub_field( 'title');?>  <?php the_sub_field( 'background_type');?> <?php the_sub_field('contrast')?>" style="background-color:<?php the_sub_field( 'background_color');?>;">
						
					<?php the_sub_field('editor')?>

				</section>

			<?php endif; ?>
			
		
	
	<?php endwhile; ?>

<?php endif; ?>


<?php if( have_rows('modals') ):?>


	<?php while ( have_rows('modals') ) : the_row(); ?>

			
					
				<?php the_sub_field('modal_editor')?>

			
								
		
	<?php endwhile; ?>

<?php endif; ?>



<section class="random-cases">
	<div class="container">
		<div class="row">
			<h2>More Cases</h2>
	<?php 
	$args = array( 
	'orderby' => 'rand',
	'post_type' => 'clients',
	'posts_per_page' => '4',
	'post_status' => 'published',
	);
	$the_query = new WP_Query( $args );
	?>
	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
	<div class="col-md-3">
		
		
		<div class="card">
			<a href="<?php the_permalink(); ?>"><div class="cover-image" style="background-image:url('<?php
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			echo $feat_image;
			?>');"></div></a>
			<div class="card-body">
				<h3 class="card-title"><?php the_title() ;?></h3>
				<a class="btn btn-primary" href="<?php the_permalink(); ?>">Read Case</a>	
			</div>
		
		</div>
	</div>
	
			
		
	<?php endwhile; else: ?> <?php endif; ?>
	<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
