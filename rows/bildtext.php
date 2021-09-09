<div class="row row-bildtext row-bildtext-theme-<?php echo $row['design'];?>" style="background-image:url(<?php echo $row['bild'];?>);padding-bottom:<?php echo $row['padding_bottom'];?>vh">
 
    <div class="content">
        <h2><?php echo $row['headline'];?></h2>
        <div class="text">
            <?php echo $row['text'];?>
        </div>
        <?php if($row['link']) { ?>
            <a class="link" target="<?php echo $row['link']['target'];?>" href="<?php echo $row['link']['url'];?>"><?php echo $row['link']['title'];?></a>
        <?php } ?>
    </div>
</div>