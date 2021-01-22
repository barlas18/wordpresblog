<div class="container-fluid footer-alani">
	
    <div class="container">
    <div class="row">
    
    <div class="col-md-3">
        
        <h4><?php the_field('1bolum_baslik','option');?></h4>
        <?php $footer_logo = get_field('1_bolum_logo','option');?>
      <img src="<?php echo $footer_logo['url'];?>" class="footer-alani-logo img-fluid"  alt=""/>
        
      <p><?php the_field('1bolum_yazi','option');?></p>
        
      <ul class="list-unstyled footer-sosyal-menu">
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
        
    <div class="col-md-3">
        
        <h4><?php the_field('2bolum_baslik','option');?></h4>
        <?php wp_nav_menu(array('theme_location'=>'footermenu','menu_class'=>'list-unstyled'));?>

        
    </div>	
        
    <div class="col-md-3">
        
        <h4><?php the_field('3bolum_baslik','option');?></h4>
        
      <div class="footer-bizdenhaberler">
      <?php
			$haberlerimiz_footer_kac_adet =get_field('3bolum_yayimlanma_sayisi','option');
		    $args =array(
			
			'post_type'=> 'post',
			'order_by'=> 'date',
			'posts_per_page'=>$haberlerimiz_footer_kac_adet


			);
			$wp_query = new WP_Query($args);
			while($wp_query->have_posts()) : $wp_query->the_post();?>

            <div class="footer-haber-oge">
            <div class="col-md-12">
            <div class="row">
        <div class="col-md-4 col-4 no-padding"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail-large',array('class'=>'img-fluid'));?></a>
        </div>
        <div class="col-md-8 col-8">
            <p><a href="haber-detay.html"><?php the_title();?></a></p>
          </div>
        </div>
        </div>
        </div>


			<?php endwhile;?>   
      
 
        </div>
        
    </div>
        
    <div class="col-md-3">
        
        <h4><?php the_field('4bolum_baslik','option');?></h4>
        <?php $etiketler = get_tags();
        foreach($etiketler as $etiket):
        $etiket_linki = get_tag_link($etiket->term_id);?>
        
     <span class="etiket"><?php echo $etiket->name;?></span>
        <?php endforeach;?>

        <div class="clearfix"></div>
        
    <div class="col-md-12 footer-copy"><?php bloginfo('name');?>| <?php bloginfo('description');?></div>
    
    </div>

    </div>
</div>

<?php wp_footer();?>
</body>
</html>
