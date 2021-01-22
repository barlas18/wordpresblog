<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php wp_title('|',true,'right');?></title>
    <?php wp_head();?>
</head>
<body>
<div class="col-md-12 col-12 header-ust">
	
	<div class="container">
		<div class="row">
		<div class="col-md-3 col-sm-3 col-6 header-slogan"><?php the_field('header_ust_slogan','option');?></div>
		<div class="col-md-3 col-sm-2 col-6 header-telefon"><i class="fas fa-phone-volume"></i><?php the_field('header_ust_telefon','option');?></div>
		<div class="col-md-3 col-sm-2 col-8 header-mail"><i class="fas fa-envelope"></i> <a href="mailto:<?php the_field('header_ust_e-mail','option');?>"><?php the_field('header_ust_e-mail','option');?></a></div>
		<div class="col-md-3 col-sm-5 col-4 header-sosyal">
		<ul class="list-unstyled">
		<?php
		$sosyalmedya_facebook = get_field('header_sosyal_medya_facebook_adresi','option');
		$sosyalmedya_twitter = get_field('header_sosyal_medya_twitter_adresi','option');
		$sosyalmedya_linkedin = get_field('header_sosyal_medya_linkedin_adresi','option');
		$sosyalmedya_instagram = get_field('header_sosyal_medya_instagram_adresi','option');?>
		<?php if($sosyalmedya_facebook):?>
			<li><a href="<?php the_field('header_sosyal_medya_facebook_adresi','option');?>"<i class="fab fa-facebook"></i></a></li>
		<?php endif;?>
		<?php if($sosyalmedya_twitter):?>
			<li><a href="<?php the_field('header_sosyal_medya_twitter_adresi','option');?>"><i class="fab fa-twitter"></i></a></li>
			<?php endif;?>
			<?php if($sosyalmedya_linkedin):?>
			<li><a href="<?php the_field('header_sosyal_medya_linkedin_adresi','option');?>"><i class="fab fa-linkedin"></i></a></li>
			<?php endif;?>

			<?php if($sosyalmedya_instagram):?>
			<li><a href="<?php the_field('header_sosyal_medya_instagram_adresi','option');?>"><i class="fab fa-instagram"></i></a></li>
			<?php endif;?>

			</ul>
		</div>	
		</div>	
	</div>
	
	</div>
	<div class="clearfix"></div>
	
	<div class="container header-alani">
		<div class="row">
	<div class="col-md-2 col-sm-3 col-6 header-logo">

	<?php $site_logosu = get_field('site_logosu','option');?>
	<a href="#"><img src="<?php echo $site_logosu['url'];?>" class="img-fluid" alt=""/></a></div>

	<div class="col-md-10 col-sm-9 col-6 header-menu">

			<?php wp_nav_menu(array('theme_location'=>'anamenu','menu_class'=>'ana-menusu'));?>
		
		
	<div class="mobile-menu">
		<?php wp_nav_menu(array('theme_location'=>'mobilmenu','menu_class'=>'mobile-menu'));?>
		</div>
	<a href="#" class="mobile-menu-ackapa"><i class="fa fa-bars"></i></a>
		
	</div>	
		</div>	
	</div>
