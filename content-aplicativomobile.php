<?php
/**
 * Template Name: Aplicativo Mobile
 */
?>
<section id="page_<?php the_id() ?>" class="content-aplicativomobile page_<?php the_id() ?>">
	<div class="container">
		<div class="row">
			<h1 class="col-xs-12"><?php the_title() ?></h1>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-5">
				<img src="<?php echo get_template_directory_uri(); ?>/images/app-orappa/app-mobile.png"
					 class="img-responsive"/>
			</div>
			<div class="col-xs-12 col-sm-7">
				<div class="row">
					<div class="excerpt col-xs-12 col-sm-12 col-md-10 ">
						<?php the_excerpt() ?>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5">
						<a href="<?php the_field('download_android_url') ?>" target="_blank" class="download-link">
							<img src="<?php echo get_template_directory_uri(); ?>/images/app-orappa/download-android.png" class="img-responsive"/>
						</a>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5">
						<a href="<?php the_field('download_ios_url') ?>" target="_blank" class="download-link">
							<img src="<?php echo get_template_directory_uri(); ?>/images/app-orappa/download-ios.png" class="img-responsive"/>
						</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>