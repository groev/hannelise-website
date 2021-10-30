<div class="row row-galerie">
    <h2><?php echo $row['headline'];?></h2>
    <section       data-featherlight-filter="a"
  data-featherlight-gallery class="galerie">
        <?php if($row['bilder']) {
            foreach($row['bilder'] as $bild) {?>

            <a href="<?php echo $bild['sizes']['large'];?>"><img src="<?php echo $bild['sizes']['large'];?>"></a>
           <?php }
        }?>
    </section>
</div>
<link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
<link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" />
<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
<script>$('a.gallery').featherlightGallery({
		previousIcon: '&#9664;',     /* Code that is used as previous icon */
		nextIcon: '&#9654;',         /* Code that is used as next icon */
		galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
		galleryFadeOut: 300          /* fadeOut speed before slide is loaded */
	});</script>