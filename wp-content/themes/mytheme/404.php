
<?php get_header(); ?>
<style type="text/css">
    body{background: url(<?= get_template_directory_uri() ?>/imgs/home/pag_bg.jpg) top center no-repeat fixed; background-size: cover;}
</style>
<div class="container body_page">


    

            <div class="row">
                <div class="col-sm-8">
                    <h1>Page Not Found</h1>
                    <hr/>
                    <h2>This is somewhat embarrassing, isn&rsquo;t it?</h2>
                    <p>It looks like nothing was found at this location. Maybe try a search?</p>

                    <?php get_search_form(); ?>
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