<?php
/**
 * Template Name: Contato
 */
?>
<section id="page_<?php the_id() ?>" class="content-contato page_<?php the_id() ?> visible-lg-block">
	<div class="container">
		<div class="row">
			<div class="newsletter col-lg-7">
				<h1>Newsletter</h1>
				<?php echo  do_shortcode('[contact-form-7 id="1466" title="Newsletter"]') ?>
			</div><!-- /Newsletter -->
			<div class="contato col-lg-3">
				<h1>Contato</h1>
				<p>Imprensa (<a href="mailto:imprensa@orappa.com.br">imprensa@orappa.com.br</a>)</p>
				<p>Shows (<a href="mailto:orappa@casadoshow.com.br">orappa@casadoshow.com.br</a>)</p>
			</div><!-- /Contato -->
			<div class="col-lg-2">
				<img src="<?php header_image(); ?>" alt="" class="img-responsive">
			</div><!-- /logo -->
		</div>
</section>