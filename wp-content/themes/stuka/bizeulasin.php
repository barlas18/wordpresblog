<?php /*Template Name: Bize Ulaşın */get_header();?>
<?php while(have_posts()):the_post();?>
<div class="container sayfa-kutusu">
		
<h2><?php the_title();?></h2>
<?php the_field('harita_kodu','option');?>
	<div class="row">
	
		<div class="col-md-9 margin-top-30 margin-bottom-30">
    
    <h2><?php the_field('iletisim_form_basligi','option');?></h2>
    
<?php echo do_shortcode('[contact-form-7 id="121" title="İletişim formu 1"]');?>


</div>
<div class="col-md-3 margin-top-30 margin-bottom-30">
<h2><?php the_field('adres_bilgileri_basligi','option');?></h2>
Adres:<?php the_field('adres','option');?><br>

Telefon: <?php the_field('telefon','option');?><br>

E-Posta: <a href = "mailto:<?php the_field('e-posta','option');?>"><?php the_field('e-posta','option');?></a>
	
</div>
       

			</div>
            <?php endwhile;?>
		
    </div>
</div>


<?php get_footer();?>