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
*
* MODULO ABOUT (box "chi siamo" + 4 box cliccabili)
*
****************************************************************************************/

/****************************************************
* TITAN FRAMEWORK - METADATI
****************************************************/
include(locate_template( 'wp-assets/template-parts/moduli/metadati/meta-about.php' )); 
?>

    <div class="pattern_left"></div>

    <div id="slider_two_two">
        <div class="slider_intro">
            <div>
                <div class="item_area">[ <?php echo $mnk_modAbout_chisiamo_rubrica; ?> ]</div>
                <div class="h1"><?php echo $mnk_modAbout_chisiamo_rigaUno; ?> <br> <?php echo $mnk_modAbout_chisiamo_rigaDue; ?></div>
                <p><?php echo $mnk_modAbout_chisiamo_content; ?></p>

                <a class="button_type_01 button_green button_large" href="<?php echo get_permalink( $mnk_modAbout_chisiamo_btnUrl ); ?>" title=""><i class="fas fa-angle-right"></i> <?php echo $mnk_modAbout_chisiamo_btnCta; ?></a>
            </div>
        </div>

        <div class="textual_slider chameleon_slider">
            <div class="owl-carousel">
                <div class="item">
                    <a href="servizi.php" title="">
                        <div><i class="icon-industria"></i></div>
                        <h3><?php echo $mnk_modAbout_industria_titolo; ?></h3>
                        <p><?php echo $mnk_modAbout_industria_content; ?></p>
                    </a>
                </div>

                <div class="item">
                    <a href="servizi.php" title="">
                        <div><i class="icon-house"></i></div>
                        <h3><?php echo $mnk_modAbout_casa_titolo; ?></h3>
                        <p><?php echo $mnk_modAbout_casa_content; ?></p>
                    </a>
                </div>

                <div class="item">
                    <a href="servizi.php" title="">
                        <div><i class="icon-servizi"></i></div>
                        <h3><?php echo $mnk_modAbout_servizi_titolo; ?></h3>
                        <p><?php echo $mnk_modAbout_servizi_content; ?></p>
                    </a>
                </div>

                <div class="item">
                    <a href="servizi.php" title="">
                        <div><i class="icon-immobiliare"></i></div>
                        <h3><?php echo $mnk_modAbout_immobiliare_titolo; ?></h3>
                        <p><?php echo $mnk_modAbout_immobiliare_content; ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>