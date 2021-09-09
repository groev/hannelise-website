<?php 
    $posts = get_posts(array(
        'posts_per_page' => 3,
        'post_type' => 'post'
    ));
?>
<div class="row row-news">
    <h2><?php echo $row['headline'];?></h2>
    <div class="grid">
        <?php if($posts):foreach($posts as $post):?>
            <div class="post">
                <figure>
                    <img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' );?>" />
                </figure>
                <h3><?php echo get_the_date('d.m');?> // <?php echo $post->post_title;?></h3>
                <summary><?php echo $post->post_excerpt;?></summary>
                <a class="link" href="<?php echo get_permalink($post->ID);?>">Mehr erfahren</a>
            </div>
        <?php endforeach;endif;?>
    </div>
</div>