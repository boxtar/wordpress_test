<?php
get_header();
get_sidebar();
?>
<br/>
<?php
if(have_posts()){
	while(have_posts()){ the_post();?>
		<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
<?php	get_template_part('content', get_post_format()); ?>
		</article>
<?php
	}
}
else{
	echo '<h1>No Results</h1>';
}
get_footer();
?>