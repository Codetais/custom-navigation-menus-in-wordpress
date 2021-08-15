<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="navbar">
    <div class="logo">
        <?php
        if (has_custom_logo()){
            the_custom_logo();
        }else{
            ?>
            <a href="<?php echo get_home_url('/')?>"><?php bloginfo('name');?></a>
        <?php
        }
        ?>
    </div>
    <nav>
        <?php
        if (has_nav_menu('primary')){
            wp_nav_menu([
                 'theme_location'        =>'primary',
                'menu_id'                =>'ul_menu'
            ]);
        }
        ?>
    </nav>
    <i class="fa fa-bars" onclick="menutoggle()"></i>
</div>