<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo('name');?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- HEADER CONTENT -->
    <header id="header" class=" fixed-top d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-11 mx-auto">
                    <a href="index.php" class="logo d-flex align-items-center gap-2 flex-nowrap">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
                        <span class="white"></span>
                        <img src="<?php bloginfo('template_directory'); ?>/images/syncordis.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>