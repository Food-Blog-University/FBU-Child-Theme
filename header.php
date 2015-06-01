<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 * @package Pure_and_Simple
 * @since 1.0.0
 */
?>
<?php $pagewidth = get_theme_mod( 'page_width', 'boxwide' ); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="<?php echo $pagewidth; ?> hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pure-and-simple' ); ?></a>


    <?php get_template_part( 'partials/logo-group' ); ?>
    <?php
    $navmenu_position =  get_theme_mod( 'nav_position', 'top');
    if (empty($navmenu_position)) {
        get_navmenu();
        get_sidebar('banner');
    }
    else {
        switch($navmenu_position) {
            case "top":
            get_navmenu ();
            get_sidebar('banner');
            break;
            case "bottom":
            get_sidebar('banner');
            get_navmenu();
            break;
            case "default":
            get_navmenu();
            get_sidebar('banner');
            break;

        }
    }

    ?>

    <p style="display:none;" id="nav_position_scrolltop"><?php echo get_theme_mod('nav_position_scrolltop'); ?></p>
    <p style="display:none;" id="nav_position_scrolltop_val"><?php echo get_theme_mod('nav_position_scrolltop_val'); ?></p>







<?php get_sidebar( 'banner' ); ?>

<?php
    $breadcrumbstyle = get_theme_mod( 'breadcrumb_bg', '#e6e6e6' );
    $breadcrumbcolour = get_theme_mod( 'breadcrumb_text', '#9e9e9e' );
    if(! is_front_page() && !is_attachment() ) :
        if(function_exists('bcn_display')) {
            echo '<div id="breadcrumb-wrapper" style="background-color:' . $breadcrumbstyle . '; color: ' . $breadcrumbcolour . ';" role="nav"><div class="container"><div class="row"><div class="col-md-12"><i class="fa fa-home"></i> ';
                bcn_display();
            echo '</div></div></div></div>';
        }
     endif;
?>

<?php get_sidebar( 'cta' ); ?>

    <?php get_sidebar( 'top' ); ?>
    <?php get_sidebar( 'featured-top' ); ?>


    <div id="primary" class="content-area">
        <div id="content" class="site-content" style="background-color: <?php echo get_theme_mod( 'content_bg', '#ffffff' ); ?>; color:<?php echo get_theme_mod( 'contenttext', '#767676' ); ?>;" role="main">
