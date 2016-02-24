
<?php echo '<a href="'.get_permalink().'">'.the_title('<h3>', '</h3>', false).'</a>';?>
<p><small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small></p>
<?php
the_content();
echo '<hr>';
?>
