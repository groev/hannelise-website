<div class="row row-iconliste">
    <h2><?php echo $row['headline'];?></h2>
    <div class="content">
        <?php echo $row['text'];?>
    </div>
    <?php
    if($row['icons']):foreach($row['icons'] as $icon):?>
        <div class="icon-row">
            <img src="<?php echo $icon['icon'];?>" alt="icon" />
            <div class="icon-text">
                <div class="icon-headline"><?php echo $icon['headline'];?></div>
                <div class="icon-text"><?php echo $icon['text'];?></div>
            </div>
        </div>
    <?php endforeach;endif; ?>
    <?php if($row['text_unten']) {?>
        <div class="text-unten">
            <?php echo $row['text_unten'];?>
        </div>    
    <?php } ?>
</div>