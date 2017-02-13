<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <meta name="description" content="Site du refuge animal de la ville de Beautor, 02800">
    <meta name="author" content="KASPERSKI Christopher">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

    <!-- Custom Fonts -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/lightbox.min.css" rel="stylesheet">

</head>

<body id="page-top">
<a href="#page-top" data-scroll="" id="moncercle" class="page-scroll"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/arrowtop.png" alt="TOP"></a>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                                                                     <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" class="logotop" alt="UDANOE">
                                                                     <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-resp.jpg" class="logotop-resp" alt="UDANOE">

                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <?php wp_nav_menu(  array(
        'theme_location'  => '',
        'menu'            => 'Primary',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'nav navbar-nav navbar-right',
        'menu_id'         => 'Primary',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '', 
        'link_class' => 'scrollTo',
        'link_after'      => '', 
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
              'depth' => 0, 
              'walker' => '' ) ); ?>
             </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<?php if (is_front_page() ): ?>
    <header class="homepage">

        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" class="titreprinci">Certains les abandonnent</h1>
                <p id="accroche">d'autre les recueillent</p>
                <hr>
                <a href="#about" class="btn btn-primary btn-lg">J'adopte un animal</a>
                <a href="#about" class="btn btn-secondary btn-lg">Je fais un don</a>
               
            </div>
        </div>
        <div class="tp-dottedoverlay twoxtwo"></div>
    </header>

  <?php else : ?>

            <?php if (is_tax( 'categorie') ) : ?>
            <header class="aboutpage">
                        <div class="abouttext"><h1 class="titreprinci"><?php single_cat_title('Les ', 'display'); ?> </h1></div>
                        <div class="tp-dottedoverlay2 twoxtwo"></div>
            </header>

             <?php else : ?>

             <header class="aboutpage">
                        <div class="abouttext"><h1 class="titreprinci"><?php the_title(); ?> </h1></div>
                        <div class="tp-dottedoverlay2 twoxtwo"></div>
            </header>               
            <?php endif; ?>
<?php endif; ?>
    <section id="services">
