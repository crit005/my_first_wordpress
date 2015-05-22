<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />        
        <title><?= bloginfo('name') ?></title>
        <!--[if IE]>
                <script type="text/javascript">
                         var console = { log: function() {} };
                </script>
        <![endif]-->
        <?= wp_head() ?>
        <script type="text/javascript">
            $(document).ready(function () {
                
                $('#fullpage').fullpage({
                    anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '6thPage'],
                    //sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
                    css3: true
                });
            });
            
            //custom scroll==================
            (function ($) {
                $(window).load(function () {

                    $(".home_block_page_content").mCustomScrollbar({
                        theme: "rounded"
                    });

                });
            })(jQuery);
        </script>

    </head>
    <body>

        <div id="header">
            <div class="container">
                <nav class=" navbar navbar-default pull-right" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <?php bloginfo('name'); ?>
                            </a-->
                        </div>                        
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </div>
                </nav>
            </div>
        </div>


        <div id="fullpage">
            <div class="section " id="section0">
                <div class="container">
                    <!--put your contain here-->
                </div>
            </div>
            <div class="section" id="section1">
                <!--page slide-->
                <!--<div class="slide" id="slide1">
                    <div class="intro">
                        <h1>How to do it</h1>
                        <p>
                            You will need to place your header and footer outside the plugin's wrapper. 
                            This way it won't move on scrolling. Take a look at the source code of this page.
                        </p>
                    </div>
                </div>

                <div class="slide" id="slide2">
                    <h1>Slide 2</h1>
                    <img src="<?php echo(get_template_directory_uri()) ?>/imgs/iphone-blue.png" alt="iphone" id="iphone-two" />
                </div>-->
                <!--end page slide-->
                <div class="container home_conten_page">                    
                    <?php
                    $args = array(
                        'name' => 'About Us',
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'caller_get_posts' => 1
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            ?>
                            <h1 class="text-center"><?= the_title() ?></h1>
                            <br/>
                            <div class="row">
                                <div class="col-sm-6 home_block_page_content about-us-content">
                                    <?= the_content() ?>
                                </div>
                                <div class="col-sm-offset-7 payment_info">                            
                                    <h2 style="margin-top: 0;"><u>PAYMENT OPTION</u></h2>
                                    <br/>
                                    <img src="<?= get_template_directory_uri() ?>/imgs/home/bca-bank.png"/>
                                    <div class="bank_description hidden-xs">
                                        Monday – Friday : 21:00 PM – 01:00 AM 
                                        Saturday : 18:00-20:00 PM & 00.00-06.00 AM 
                                        The big day and date in red not offline
                                    </div>                                    

                                    <img src="<?= get_template_directory_uri() ?>/imgs/home/mandiri-bank.png"/><br/>
                                    <div class="bank_description  hidden-xs">
                                        Monday – Friday : 21:00 PM – 01:00 AM 
                                        Saturday : 18:00-20:00 PM & 00.00-06.00 AM 
                                        The big day and date in red not offline
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    }else {
                        echo ('<p> Page request not found </p>');
                    }
                    wp_reset_query();
                    ?>

                </div>

            </div>
            <div class="section" id="section2">
                <div class="container home_conten_page">                    
                    <?php
                    $args = array(
                        'name' => 'CASINO ONLINE',
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'caller_get_posts' => 1
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            ?>
                            <h1 class="text-center"><?= the_title() ?></h1>
                            <br/>
                            <div class="row">
                                <div class="col-sm-6 col-md-4 image-present-content">
                                    <img src="<?= get_template_directory_uri() ?>/imgs/home/sport_girl.png"/>                                    
                                </div>
                                <div class="col-sm-offset-6 home_block_page_content">
                                    <?= the_content() ?>
                                </div>

                            </div>
                            <?php
                        endwhile;
                    }else {
                        echo ('<p> Page request not found </p>');
                    }
                    wp_reset_query();
                    ?>

                </div>
            </div>

            <div class="section" id="section3">
                <div class="container home_conten_page">                    
                    <?php
                    $args = array(
                        'name' => 'CASINO ONLINE',
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'caller_get_posts' => 1
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            ?>
                            <h1 class="text-center"><?= the_title() ?></h1>
                            <br/>
                            <div class="row">                                
                                <div class="col-sm-6 home_block_page_content">
                                    <?= the_content() ?>
                                </div>
                                <div class="col-sm-offset-6 col-md-offset-8 image-present-content">
                                    <img src="<?= get_template_directory_uri() ?>/imgs/home/casino_girl.png" />
                                </div>

                            </div>
                            <?php
                        endwhile;
                    }else {
                        echo ('<p> Page request not found </p>');
                    }
                    wp_reset_query();
                    ?>

                </div>
            </div>

            <div class="section" id="section4">
                <div class="container home_conten_page">                    
                    <?php
                    $args = array(
                        'name' => 'TANGKAS ONLINE',
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'caller_get_posts' => 1
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            ?>
                            <h1 class="text-center"><?= the_title() ?></h1>
                            <br/>
                            <div class="row">
                                <div class="col-sm-4 image-present-content">
                                    <img src="<?= get_template_directory_uri() ?>/imgs/home/tangkas_girl.png"/>                                    
                                </div>
                                <div class="col-sm-offset-6  home_block_page_content">
                                    <?= the_content() ?>
                                </div>

                            </div>
                            <?php
                        endwhile;
                    }else {
                        echo ('<p> Page request not found </p>');
                    }
                    wp_reset_query();
                    ?>

                </div>
            </div>

            <div class="section" id="section5">
                <div class="container home_conten_page">                    
                    <?php
                    $args = array(
                        'name' => 'TOTO',
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'caller_get_posts' => 1
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            ?>
                            <h1 class="text-center"><?= the_title() ?></h1>
                            <br/>
                            <div class="row">                                
                                <div class="col-sm-6 home_block_page_content">
                                    <?= the_content() ?>
                                </div>
                                <div class="col-sm-offset-6 col-md-offset-8 image-present-content">
                                    <img src="<?= get_template_directory_uri() ?>/imgs/home/lottery_girl.png" />
                                </div>

                            </div>
                            <?php
                        endwhile;
                    }else {
                        echo ('<p> Page request not found </p>');
                    }
                    wp_reset_query();
                    ?>

                </div>
            </div>

        </div>
        <!--div id="footer">Footer</div-->
        <?= wp_footer() ?>

    </body>

</html>