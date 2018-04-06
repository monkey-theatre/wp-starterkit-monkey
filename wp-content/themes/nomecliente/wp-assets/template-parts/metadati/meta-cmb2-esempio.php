<?php
/**********************
* CMB2 METABOX Immobiliare
**********************/
$mnk_prefix = 'immobiliare_';

$mnk_meta_codAnnuncio = get_post_meta( $post->ID, $mnk_prefix.'codAnnuncio', true );
$mnk_meta_localita = get_post_meta( $post->ID, $mnk_prefix.'localita', true );
/* 1 di 2 */
$mnk_meta_classeEnergetica = get_post_meta( $post->ID, $mnk_prefix.'classeEnergetica', true );
$mnk_meta_locali = get_post_meta( $post->ID, $mnk_prefix.'locali', true );
$mnk_meta_mq = get_post_meta( $post->ID, $mnk_prefix.'mq', true );
$mnk_meta_bagni = get_post_meta( $post->ID, $mnk_prefix.'bagni', true );
$mnk_meta_postiAuto = get_post_meta( $post->ID, $mnk_prefix.'postiAuto', true );
$mnk_meta_mqBox = get_post_meta( $post->ID, $mnk_prefix.'mqBox', true );
/* 2 di 2 */
$mnk_meta_condizioni = get_post_meta( $post->ID, $mnk_prefix.'condizioni', true );
$mnk_meta_annoCostruzione = get_post_meta( $post->ID, $mnk_prefix.'annoCostruzione', true );
$mnk_meta_piano = get_post_meta( $post->ID, $mnk_prefix.'piano', true );
$mnk_meta_ascensore = get_post_meta( $post->ID, $mnk_prefix.'ascensore', true );
$mnk_meta_giardino = get_post_meta( $post->ID, $mnk_prefix.'giardino', true );
$mnk_meta_mqGiardino = get_post_meta( $post->ID, $mnk_prefix.'mqGiardino', true );
$mnk_meta_rogito = get_post_meta( $post->ID, $mnk_prefix.'rogito', true );
?>