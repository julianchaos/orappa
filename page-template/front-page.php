<?php
/*
  Template Name: Front Page
 */

get_header();

//Inclusão da seção do carrossel
get_template_part('content', 'carousel');

$args = array("post_type" => "page", "order" => "ASC", "orderby" => "meta_value_num", "meta_key" => "posicao_pagina");
$the_query = new WP_Query($args);

if (have_posts()):
	while ($the_query->have_posts()):
		$the_query->the_post();

		$pageTemplateCommand = getPageTemplateCommand();
		if(is_array($pageTemplateCommand)) :
			get_template_part($pageTemplateCommand[0], $pageTemplateCommand[1]);
		endif;
	endwhile;
endif;



get_footer();
