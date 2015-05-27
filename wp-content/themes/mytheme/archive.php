 

<?php get_header(); ?>
<style type="text/css">
    body{background: url(<?= get_template_directory_uri() ?>/imgs/home/pag_bg.jpg) top center no-repeat fixed; background-size: cover;}
</style>
<div class="container body_page">


    <div class="row">
        <div class="col-sm-8">
            <?php if (have_posts()) : ?>
                <header class="archive-header">
                    <h1 class="archive-title"><?php
                        if (is_day()) :
                            printf(__('Daily Archives: %s', 'twentythirteen'), get_the_date());
                        elseif (is_month()) :
                            printf(__('Monthly Archives: %s', 'twentythirteen'), get_the_date(_x('F Y', 'monthly archives date format', 'twentythirteen')));
                        elseif (is_year()) :
                            printf(__('Yearly Archives: %s', 'twentythirteen'), get_the_date(_x('Y', 'yearly archives date format', 'twentythirteen')));
                        else :
                            _e('Archives', 'twentythirteen');
                        endif;
                        ?></h1>
                </header><!-- .archive-header -->

                <?php /* The loop */ ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php //get_template_part( 'content', get_post_format() ); ?>
                    <h2><a href="<?= the_permalink() ?>"><?= the_title(); ?></a></h2>
                    <?= the_excerpt() ?>
                <?php endwhile; ?>

                <?php
                 
                //wpbeginner_numeric_posts_nav();                
                the_posts_pagination(array(
                     "prev_text"=>"« Prev",
                     'next_text'=>'Next »',
                     'screen_reader_text'=>' ',
                     ));
                ?>                


            <?php else : ?>
                <?php get_template_part('content', 'none'); ?>
            <?php endif; ?>
        </div>
        <div class="col-sm-4 right_sidebare">
            <?php
            if (is_active_sidebar('right_sidebar')):
                dynamic_sidebar('right_sidebar');
            endif;
            ?>
        </div>
    </div>

</div>


<?php get_footer(); ?>


