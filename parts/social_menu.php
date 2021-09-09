<?php $icons = get_field('social_icons', 'option');?>
<ul class="social-menu">
    <?php if($icons):foreach($icons as $icon):?>
        <li><a href="<?php echo $icon['link'];?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo $icon['icon'];?>" alt="Icon"></a></li>
    <?php endforeach;endif;?>
</ul>