<?php get_header(); ?>
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
<!--Full page-->
<div id="fullpage">
    <!--Content home page-->
    <div class="section " id="section0">
        <div class="container">
            <!--put your contain here-->
        </div>
    </div>
    <!--End content home page-->

    <!--Content about us-->
    <div class="section" id="section1">        
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
    <!--End content about us-->

    <!--Content sportbook-->
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
    <!--End content sportbook-->

    <!--Content casino-->
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
    <!--End content casino-->

    <!--Content tangkas-->
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
    <!--End content tangkas-->

    <!--Content lottery-->
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
    <!--End content lottery-->

    <!--Content news block-->    
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
    <!--End Content news block-->

</div>
<!--End full page-->
<?php get_footer(); ?>