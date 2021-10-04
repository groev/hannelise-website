<div class="hannelise-template-single">

<?php while ( have_posts() ) : the_post(); ?>
                 
<article class="post">
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' );?>" />
                </figure>
                <div class="content">
                <div class="date"><?php echo get_the_date('d.m.Y');?></div>
<h1><?php the_title();?></h1>
                <section><?php the_content();?></section>
</div>
            </article>


<?php endwhile; // end of the loop. ?>
<div class="pagination">
<?php    echo paginate_links(); ?>

</div>
</div>

