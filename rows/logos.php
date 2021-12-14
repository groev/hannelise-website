<div class="row row-logos">
    <h2><?php echo $row['headline'];?></h2>
    <div class="logo-slider">
        <?php if($row['logos']):foreach($row['logos'] as $logo):?>
            <a  target="_blank" href="<?php echo $logo['link'];?>"><img src="<?php echo $logo['logo'];?>" alt="Logo"></a>
        <?php endforeach;endif;?>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link  rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


<script>
jQuery(document).ready(function($) {
  $('.logo-slider').slick({
    slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll:1,
        arrows:true,
        infinite: true,
      }
    },
  ]
  });
});


</script>