<?php
/**
 * Template Name: Loja
 */
?>
<section id="page_<?php the_id() ?>" class="content-loja page_<?php the_id() ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><?php the_title() ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 excerpt">
				<?php the_content() ?>
			</div>
			<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-lg-2 col-lg-offset-5">
				<a href="<?php the_field('url_loja') ?>" target="_blank" class="button">Acessar</a>
			</div>
		</div>
	</div>
</section>