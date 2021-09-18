<div class="row row-block row-block-align-<?php echo $row['ausrichtung'];?> row-block-theme-<?php echo $row['design'];?>">
    <div class="inner">
    <div class="bild">
        <img src="<?php echo $row['bild'];?>" alt="bild" />
    </div>
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
</div>