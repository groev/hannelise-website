<?php 
    $posts = $row['items'];
?>
<div class="row row-raster">
    <h2 class="headline"><?php echo $row['headline'];?></h2>
    <div class="grid">
        <?php if($posts):foreach($posts as $post):?>
            <div class="post">
                <figure>
                    <img src="<?php echo $post['bild'];?>";?>" />
                </figure>
                <h3><?php echo $post['headline'];?></h3>
                <summary><?php echo $post['text'];?></summary>
                <?php if($post['link']) {?>
                <a target="<?php echo $post['link']['target'];?>" class="link" href="<?php echo $post['link']['url'];?>"><?php echo $post['link']['title'];?></a>
                <?php } ?>
            </div>
        <?php endforeach;endif;?>
    </div>
</div>