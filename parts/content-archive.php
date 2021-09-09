<div class="hannelise-template-archive">
<h1>Aktuelles</h1>
<div class="grid">
<?php while ( have_posts() ) : the_post(); ?>
                 
<div class="post">
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' );?>" />
                </figure>
                <h3><?php echo get_the_date('d.m');?> // <?php echo $post->post_title;?></h3>
                <summary><?php echo $post->post_excerpt;?></summary>
                <a class="link" href="<?php echo get_permalink($post->ID);?>">Mehr erfahren</a>
            </div>


<?php endwhile; // end of the loop. ?>
</div>
<div class="pagination">
<?php    echo paginate_links(); ?>

</div>
</div>

