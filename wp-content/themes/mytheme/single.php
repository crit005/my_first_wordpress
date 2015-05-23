<?php get_header(); ?>
<style type="text/css">
    body{background: url(<?= get_template_directory_uri() ?>/imgs/home/pag_bg.jpg) top center no-repeat fixed; background-size: cover;}
</style>
<div class="container body_page">

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            // Write any content as you want here
            ?>

            <div class="row">
                <div class="col-sm-8">
                    <h1><?= the_title() ?></h1>
                    <hr/>
                    <?= the_content(); ?>
                </div>
                <div class="col-sm-4 right_sidebare">
                    <?php
                    if (is_active_sidebar('right_sidebar')):
                        dynamic_sidebar('right_sidebar');
                    endif;
                    ?>
                </div>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    wp_reset_query();
    ?>
</div>


<?php get_footer(); ?>