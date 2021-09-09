<?php 
$terms = get_terms( array(
    'taxonomy' => 'gruppe',
    'hide_empty' => false,
));
?>

<div class="row row-sortiment">
    <h2><?php echo $row['headline'];?></h2>
    <div class="grid">
    <?php if($terms):foreach($terms as $term):?>
        <div class="gruppe">
        <h3><?php echo $term->name;?></h3>
        <?php $posts = get_posts(array(
            'post_type' => 'gegenstand', 
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'terms' => $term->term_id,
                    'field' => 'term_id',
                    'taxonomy' => 'gruppe'
                )
            )
        ));?>
  
        <ul>
        <?php if($posts):foreach($posts as $post):?>
            <li><?php echo $post->post_title;?></li>
        <?php endforeach;endif;?>
        </ul>
        </div>
    <?php endforeach;endif;?>
    </div>
</div>