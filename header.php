
<!DOCTYPE html>
	
    <html <?php language_attributes() ;?> >
    <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
    <?php wp_head(); ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=IM+Fell+French+Canon&display=swap" rel="stylesheet">
    </head>
    <body <?php body_class(); ?>>
      <header>
    
    
        <div id="top"><?php get_search_form(); ?>  </div> <!--close top -->
    
            <div id="inner-header"> 
                    <!--logo -->
                    <a href="<?php echo get_home_url(); ?>" >
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="logo" id="logo"> </a>
                    
                
            
                    <nav id ="site-navigation" class="main-navigation">
                        <button class="nav-button">Toggle Navigation</button>
                        <?php $args_primary = array(
                            'theme_location' => 'primary'
                        ); 
                        ?>
                        <?php wp_nav_menu($args_primary); ?>
    
                    </nav>   <!-- Nav -->
            </div><!--close inner-header -->
    
        <!-- If we have post display them with while loop -->
    
        </header>
    
    
    <div id="hero">
    <img src="<?php echo get_template_directory_uri();?>/images/earth-sun-rising1.jpg" alt="sun rising over earth" id="img-hero">
    </div><!-- end hero -->