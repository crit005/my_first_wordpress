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
                    anchors: ['firstPage', 'secondPage', '3rdPage'],
                    sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
                    css3: true
                });
            });
        </script>

    </head>
    <body>

        <div id="header">Header</div>


        <div id="fullpage">
            <div class="section " id="section0">
                <div >
                    <?php
if (have_posts()) :
	while (have_posts()) : 
the_post();
	// Write any content as you want here
	the_content();
endwhile;
else :
echo '<p>No content found</p>';	
endif;
?>

                </div>
            </div>
            <div class="section" id="section1">
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

            </div>
            <div class="section" id="section2">
                <div class="intro">
                    <h1>Enjoy it</h1>
                </div>
            </div>
        </div>
        <div id="footer">Footer<?= wp_footer() ?></div>


    </body>

</html>