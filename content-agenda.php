<?php
/**
 * Template Name: Agenda
 */
?>
<section id="page_<?php the_id() ?>" class="content-agenda page_<?php the_id() ?>">
	<div class="container">
		<div class="row">
			<h2><?php the_title() ?></h2>
			<h3>
				<?php the_field('subtitulo') ?>
				<span class="tag"><?php the_field('subtitulo_tag') ?></span>
			</h3>
		</div>
<?php
if( have_rows('datas_shows') ): ?>
		<div class="row">
			<div class="col-xs-2">Data</div>
			<div class="col-xs-6">Cidade</div>
			<div class="col-xs-4">Ingressos</div>
		</div>
<?php
    while ( have_rows('datas_shows') ) : 
		the_row();
		$data = date("d/m", strtotime(get_sub_field('data')));
?>

		<div class="row data-show">
			<div class="col-xs-2">
				<?php echo $data ?>
			</div>
			<div class="col-xs-6">
				<?php the_sub_field('cidade') ?>
			</div>
			<div class="col-xs-4">
				<a href="<?php the_sub_field('url_ingressos') ?>">Comprar</a>
			</div>
		</div>
<?php
    endwhile;	
endif;
?>
	</div>
</section>