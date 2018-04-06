<?php
/**
*
* @package    WordPress "Monkey Studio StarterKit"
* @subpackage ##Cliente
* @version    0.0.1
* @author     Monkey Theatre Studio <Ronny Briolotti>
*
*/
/****************************************************************************************
* METADATI IN ITALIANO - MODULO ABOUT (box "chi siamo" + 4 box cliccabili)
****************************************************************************************/
// Qui dichiaro le variabili per recuperare i dati inseriti negli option-panel

/****************************************************
* TITAN FRAMEWORK - INITIALIZE OBJECT AND GET OPTIONS
****************************************************/
// We will initialize $titan only once for every file where we use it.
$titan = TitanFramework::getInstance( 'mnkZani' );

/****************************************************
* CONDIZIONI 
* Condizioni che identificano la pagina e la lingua
****************************************************/
if( ICL_LANGUAGE_CODE =='it' ){
    $mnk_lang = '_ITA';
}
if( ICL_LANGUAGE_CODE =='en' ){
    $mnk_lang = '_ENG';
}
/****************************************************
* FINE CONDIZIONI
****************************************************/

// ABOUT
$mnk_modAbout_chisiamo_rubrica  = $titan->getOption( 'mnk_modAbout_chisiamo_rubrica' . $mnk_lang );
$mnk_modAbout_chisiamo_rigaUno  = $titan->getOption( 'mnk_modAbout_chisiamo_rigaUno' . $mnk_lang );
$mnk_modAbout_chisiamo_rigaDue  = $titan->getOption( 'mnk_modAbout_chisiamo_rigaDue' . $mnk_lang );
$mnk_modAbout_chisiamo_content  = $titan->getOption( 'mnk_modAbout_chisiamo_content' . $mnk_lang );
$mnk_modAbout_chisiamo_btnCta   = $titan->getOption( 'mnk_modAbout_chisiamo_btnCta' . $mnk_lang );
$mnk_modAbout_chisiamo_btnUrl   = $titan->getOption( 'mnk_modAbout_chisiamo_btnUrl' . $mnk_lang );

// INDUSTRIA
$mnk_modAbout_industria_titolo   = $titan->getOption( 'mnk_modAbout_industria_titolo' . $mnk_lang );
$mnk_modAbout_industria_content  = $titan->getOption( 'mnk_modAbout_industria_content' . $mnk_lang );
$mnk_modAbout_industria_btnUrl   = $titan->getOption( 'mnk_modAbout_industria_btnUrl' . $mnk_lang );

// CASA
$mnk_modAbout_casa_titolo   = $titan->getOption( 'mnk_modAbout_casa_titolo' . $mnk_lang );
$mnk_modAbout_casa_content  = $titan->getOption( 'mnk_modAbout_casa_content' . $mnk_lang );
$mnk_modAbout_casa_btnUrl   = $titan->getOption( 'mnk_modAbout_casa_btnUrl' . $mnk_lang );

// IMMOBILIARE
$mnk_modAbout_immobiliare_titolo   = $titan->getOption( 'mnk_modAbout_immobiliare_titolo' . $mnk_lang );
$mnk_modAbout_immobiliare_content  = $titan->getOption( 'mnk_modAbout_immobiliare_content' . $mnk_lang );
$mnk_modAbout_immobiliare_btnUrl   = $titan->getOption( 'mnk_modAbout_immobiliare_btnUrl' . $mnk_lang );

// SERVIZI
$mnk_modAbout_servizi_titolo   = $titan->getOption( 'mnk_modAbout_servizi_titolo' . $mnk_lang );
$mnk_modAbout_servizi_content  = $titan->getOption( 'mnk_modAbout_servizi_content' . $mnk_lang );
$mnk_modAbout_servizi_btnUrl   = $titan->getOption( 'mnk_modAbout_servizi_btnUrl' . $mnk_lang );
?>