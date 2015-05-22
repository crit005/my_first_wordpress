<?php get_header(); ?>
<div class="container body_page">

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            // Write any content as you want here
            ?>
            <h1><?= the_title() ?></h1>
            <div class="row">
                <div class="col-sm-8">
                    <?= the_content(); ?>
                </div>
            </div>
            <div class="col-sm-4">
                
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