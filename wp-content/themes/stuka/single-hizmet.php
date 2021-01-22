<?php get_header();?>
<?php while(have_posts()):the_post();?>
<div class="container sayfa-kutusu">
	
	<div class="row">
	
		<div class="col-md-9 margin-top-30 margin-bottom-30">
			 <h2><?php the_title();?>   </h2>
<?php the_content();?>
       

			</div>
            <?php endwhile;?>
			<div class="col-md-3 margin-top-30 margin-bottom-30 text-right">
            <h4>Diğer Hizmetlerimiz</h4>
            <ul class="list-unstyled hizmet-menusu">

            <?php $args= array(
                'post_type'=> 'hizmet',
                'order_by'=> 'date',
                'posts_per_page'=> '-1',
                'post__not_in'=> array(get_the_ID()),
            );
            $wp_query = new WP_Query($args);
            while($wp_query->have_posts()):$wp_query->the_post();?>
            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>

        <?php endwhile;?>
			</ul>
			
			</div>
	
	
	</div>
</div>
<?php get_footer();?>