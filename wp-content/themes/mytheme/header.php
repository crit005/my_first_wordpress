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
    </head>
    <body>
<!--Header block-->
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
<!--End header block-->