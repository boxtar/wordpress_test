<?php get_header(); ?>

<div class="row">

<?php
if(have_posts()){
	while(have_posts()){ the_post();?>
		<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
<?php		get_template_part('content', get_post_format()); ?>
		</article>
<?php
	}
}?>

</div>

<?php
get_sidebar();
get_footer();
?>