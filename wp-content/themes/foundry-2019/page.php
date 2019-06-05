<?php get_header(); ?>

<?php if(get_field('cover_type')!='none'): ?>
<section class="<?php the_field( 'cover_contrast');?> page-section intro" style="background-image:url('<?php the_field( 'cover_image');?>');">

	<div class="container">
		<div class="row">
				<div class="intro-content">
					
				
				
					<div class="container">
						<div class="row">
							<div class="logo" style="background-image:url('<?php the_field( 'client_logo');?>');"> </div>
							<h1><?php the_field( 'header');?></h1>
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
				
				<?php if(get_field('cover_type')=='bg-video'): ?>
					<div class="video">
						<video autoplay muted loop playsinline>
						  <source src="<?php the_field('cover_image_mp4'); ?>" type="video/mp4">
						  <source src="<?php the_field('cover_image_ogg'); ?>" type="video/ogg">
						  <source src="<?php the_field('cover_image_webm'); ?>" type="video/webm">
						Your browser does not support the video tag.
						</video>
						
					</div>
				<?php endif; ?>

				<?php if(get_field('cover_type')=='featured'): ?>
					<div class="video">
						<video autoplay muted loop playsinline>
						  <source src="<?php the_field('cover_image_mp4'); ?>" type="video/mp4">
						  <source src="<?php the_field('cover_image_ogg'); ?>" type="video/ogg">
						  <source src="<?php the_field('cover_image_webm'); ?>" type="video/webm">
						Your browser does not support the video tag.
						</video>


						
					</div>
				<?php endif; ?>

				

			
		</div>
	</div>
	
	
</section>	
<?php endif; ?>

<?php if( have_rows('section') ):?>


	<?php while ( have_rows('section') ) : the_row(); ?>
		
			

			<?php if(get_sub_field('background_type')=='image'): ?>
				<section class="page-section <?php the_sub_field( 'background_type');?> <?php the_sub_field('contrast')?>" style="background-image:url('<?php the_sub_field( 'background_image');?>');">
						
					<?php the_sub_field('editor')?>

				</section>

			<?php endif; ?>

			<?php if(get_sub_field('background_type')=='video'): ?>
				<section class="page-section <?php the_sub_field( 'background_type');?> <?php the_sub_field('contrast')?>" style="">
						
					<?php the_sub_field('editor')?>


					<div class="video">
						<video autoplay muted loop playsinline>
						  <source src="<?php the_sub_field('background_video_mp4'); ?>" type="video/mp4">
						  <source src="<?php the_sub_field('background_video_ogg'); ?>" type="video/ogg">
						  <source src="<?php the_sub_field('background_video_webm'); ?>" type="video/webm">
						Your browser does not support the video tag.
						</video>
						
					</div>


				</section>

			<?php endif; ?>

			<?php if(get_sub_field('background_type')=='color'): ?>
				<section class="page-section <?php the_sub_field( 'background_type');?> <?php the_sub_field('contrast')?>" style="background-color:<?php the_sub_field( 'background_color');?>;">
						
					<?php the_sub_field('editor')?>

				</section>

			<?php endif; ?>
			
		
	
	<?php endwhile; ?>

<?php endif; ?>

<?php if(get_field('cover_type')=='featured'): ?>

<div class="fs-video">
	<div class="fs-video-container">
		

		<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
		<div class="embed-container"><iframe id="video" class="youtube-video" src="https://www.youtube.com/embed/<?php the_field( 'full_video_url');?>?enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>

	</div>

	

	
</div>

<button id="fs-play" class="play-btn"><i class="fas fa-times"></i></button>
<?php endif; ?>	


<section class="random-cases">
	<div class="container">
		<div class="row">
			<h2>Recent Cases</h2>
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

<?php get_footer(); ?>
