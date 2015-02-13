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
			<div class="col-xs-12">
<?php
if( have_rows('lista_links') ):
	while ( have_rows('lista_links') ) : 
		the_row();
?>
				<div class="row item-link">
					<div class="col-xs-12 item-link-img">
						<a href="<?php the_sub_field('url') ?>" target="_blank">
							<img src="<?php the_sub_field('imagem') ?>" class="img-responsive" />
						</a>
					</div>
					<div class="col-xs-12 item-link-title">
						<a href="<?php the_sub_field('url') ?>" target="_blank">
							<?php the_sub_field('titulo') ?>
						</a>
					</div>
				</div>
<?php
	endwhile;
endif; ?>
			</div>
		</div>
	</div>
</section>