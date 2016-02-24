<?php
get_header();?>
<h1>SINGLE POST PAGE (single.php)</h1>
<?php
if(have_posts()){
	while(have_posts()){ the_post();?>
		<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
<?php		get_template_part('content', get_post_format()); ?>
			<div>
			<?php 
			if(get_post_format()==='image')
				the_content(); 
			?>
			</div>
		</article>
<?php
	}
}
get_footer();
?>