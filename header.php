<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://bootstraptaste.com" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                           <?php $headertext = get_theme_mod( 'mordern_text_input' );

                            if ( function_exists( 'custom_logo' ) ) {
                                the_custom_logo();
                            }else{
                                echo $headertext;
                            }
                            ?>

                        </a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <?php

                        if(has_nav_menu('header')){

                            wp_nav_menu(array(
                                'theme_location' => 'header',
                                'menu_class'     => 'nav navbar-nav',

                            )); 
                        }                   
                        ?>
                    </div>
                </div>
            </div>
        </header>
    </div>