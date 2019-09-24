<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_theme_file_uri( '/assets/images/logo2.png' ); ?>" type="image/x-icon">
  <meta name="description" content="">
  
  <?php wp_head(); ?>
  
  <title>Home</title>  
  
  
</head>
<body>
  <section class="menu cid-rCUDISQlFj" once="menu" id="menu1-1">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo site_url( ); ?>">
                         <img src="<?php echo get_theme_file_uri( '/assets/images/logo2.png' ); ?>" alt="Wp_Theme" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="<?php echo site_url(); ?>"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        MOBIRISE
                    </a></span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                        
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'HeaderNavbar',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'menu-{menu-slug}-container',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) );
                        ?>
                    </a>
                </li>
            </ul>            
        </div>
    </nav>
</section>