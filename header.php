<html>
    <head>
        <?php wp_head();?>
        <link  rel="shortcut icon" href="<?php the_field('favicon', 'option');?>" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if(get_field('seo_titel')) {?>
            <title><?php the_field('seo_titel');?></title>
        <?php } else { ?>
            <title><?php echo get_bloginfo('name') ?> - <?php the_title();?></title>
        <?php } ?>
        <meta name="description" content="<?php the_field('seo_description');?>">
    </head>
    <body>
        <div class="page-wrap">
            <header id="header">
                <div class="sub-header">
                    <?php wp_nav_menu(array('theme_location' => 'sub_menu', 'container' => 'nav', 'container_class' => 'sub_menu'));?>
                    <?php echo get_template_part('parts/social_menu');?>
                </div>
                <div class="line"></div>
                <div class="main-header">
                    <a rel="home" href="/"><img class="logo" src="<?php the_field('logo', 'option');?>" alt="Hannelise Logo" /></a>
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'container' => 'nav', 'container_class' => 'main_menu'));?>
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    <div class="overlay"></div>
                </div>
            </header>
            <main>