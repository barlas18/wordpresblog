<?php get_header();?>


<div class="container sayfa-kutusu">
	
	
  <h2>Referanslarımız</h2>
	
			
<div class="row">
<?php if(have_posts()):?>
<?php while(have_posts()): the_post();?>
	
            <div class="col-md-3 referans-oge">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail-large',array('class'=>'img-fluid'));?></a>
		
			</div>
<?php endwhile ;?>		
<?php else:?>
    İçerik bulunamadı
<?php endif;?>
</div>
	
	
	
</div>
<?php get_footer();?>