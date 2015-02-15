<?php
/**
 * Template Name: Agenda
 */
?>
<section id="page_<?php the_id() ?>" class="content-agenda page_<?php the_id() ?>">
	<div class="container">
		<div class="row">
			<h1 class="col-xs-12"><?php the_title() ?></h1>
			<h4 class="col-xs-12">
				<?php the_field('subtitulo') ?>
				<span class="tag"><?php the_field('subtitulo_tag') ?></span>
			</h4>
		</div>
<?php
if( have_rows('datas_shows') ): 
	$limit = get_field('qtd_show_inicial'); ?>
		<div class="row data-show-header">
			<div class="col-xs-2 col-sm-1 col-lg-1 col-lg-offset-1">Data</div>
			<div class="col-xs-6 col-sm-4 col-sm-offset-1 col-lg-offset-0">Cidade</div>
			<div class="hidden-xs col-sm-3">Local</div>
			<div class="col-xs-4 col-sm-3 col-lg-2">Ingressos</div>
		</div>
<?php
	$showQtd = 0;
    while ( have_rows('datas_shows') ) :
		$showQtd++;
		$hiddenClass = null;
		if($showQtd > $limit) {
			$hiddenClass = 'hidden';
		}
		the_row();
		$data = date("d/m", strtotime(get_sub_field('data')));
?>

		<div class="row data-show <?php echo $hiddenClass ?>">
			<div class="col-xs-2 col-sm-1 col-lg-1 col-lg-offset-1">
				<?php echo $data ?>
			</div>
			<div class="col-xs-6 col-sm-4 col-sm-offset-1 col-lg-offset-0">
				<?php the_sub_field('cidade') ?> <a href="<?php the_sub_field('url_facebook') ?>" target="_BLANK" class="facebook-event-link visible-lg-inline-block fa fa-external-link"
													data-toggle="tooltip" data-placement="top"
													title="Saiba mais sobre esse evento no nosso facebook"></a>
			</div>
			<div class="hidden-xs col-sm-3">
				<?php the_sub_field('local') ?>
			</div>
			<div class="col-xs-4 col-sm-3 col-lg-2">
				<a href="<?php the_sub_field('url_ingressos') ?>" class="button">Comprar</a>
			</div>
		</div>
<?php
    endwhile; ?>
		<div class="row more-itens visible-lg-block">
			<div class="col-lg-11">
				<a href="javascript: void(0)">&gt;Ver mais shows</a>
			</div>
		</div>
<?php 
endif; ?>
	</div>
</section>