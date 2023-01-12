<?php
/**
 * Part Name: Logo In Menu
 */
?>

<header id="masthead" class="site-header masthead-logo-in-menu <?php if ( ! siteorigin_setting( 'logo_in_menu_constrain' ) ) echo ' unconstrained-logo'; ?>" role="banner">

    <nav class="site-navigation main-navigation primary use-sticky-menu">
	<?php /* cette ligne à commenter pour supprimer l'affichage du menu d'origine OU Empty Menu dans Layout*/
    get_template_part( 'parts/menu', apply_filters( 'vantage_menu_type', siteorigin_setting( 'layout_menu' ) ) ); ?>

        <div class="full-container">
            <div class="logo-in-menu-wrapper">
                <a href="/index.php" title="Planty" rel="home" class="logo"><img src="/wp-content/uploads/2022/12/Logo_planty.png" class="logo-height-constrain" width="1080" height="184" alt="Planty Logo"></a>
            </div>

            <div class="menu mobile-nav-customize-wrapper">
                <nav id="header-menu" >
                        <?php //rajout de menu header jg
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'header-menu',
                                    'id' => 'header-menu',
                                )
                            );
                        ?>
                </nav>

                
            </div>               
        </div>

    </nav>    

</header>
