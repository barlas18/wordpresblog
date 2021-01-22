<?php get_header();?>


<div class="container sayfa-kutusu">
	
	
  <h2>Hizmetlerimiz</h2>
	
			
<div class="row">
<?php if(have_posts()):?>
<?php while(have_posts()): the_post();?>
	
            <div class="col-md-4 hizmet-oge">
			<?php the_post_thumbnail('thumbnail-large',array('class'=>'img-fluid'));?>
			<div class="col-md-12 hizmet-oge-aciklama">
			<h3><?php the_title();?></h3>
			<?php the_excerpt();?>
			<div class="clearfix"></div>
			</div>	
			</div>
<?php endwhile ;?>		
<?php else:?>
    İçerik bulunamadı
<?php endif;?>
</div>
	
	
	
</div>
<?php get_footer();?>