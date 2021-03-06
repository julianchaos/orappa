<?php
/**
 * Template Name: Nação
 */
?>
<section id="page_<?php echo $post->post_name ?>" class="content-nacao page_<?php the_id() ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<img src="<?php echo get_template_directory_uri(); ?>/images/nacao/logo.png"
					 class="img-responsive"/>
			</div>
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				<h1><?php the_title() ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 excerpt">
				<?php the_excerpt() ?>
			</div>
			<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-lg-2 col-lg-offset-5">
				<a href="<?php the_field('url_nacao') ?>" target="_blank" class="button">Acessar</a>
			</div>
		</div>
	</div>
</section>