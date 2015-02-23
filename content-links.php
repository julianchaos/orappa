<?php
/**
 * Template Name: Links
 */
?>
<section id="page_<?php the_id() ?>" class="content-links page_<?php the_id() ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><?php the_title() ?></h1>
			</div>
		</div>
		<div class="row">
<?php
if( have_rows('lista_links') ):
	while ( have_rows('lista_links') ) : 
		the_row();
		$largeDeviceClass = (get_sub_field('apresentacao') === 'large' ? 'visible-lg-block' : null);
?>
			<div class="item-link col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-lg-3 <?php echo $largeDeviceClass ?>">
				<a href="<?php the_sub_field('url') ?>" target="_blank">
					<img src="<?php the_sub_field('imagem') ?>" class="img-responsive item-link-img" />
					<p class="item-link-title"><?php the_sub_field('titulo') ?></p>
				</a>
			</div>
<?php
	endwhile;
endif; ?>
		</div>
	</div>
</section>