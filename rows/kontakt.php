<div class="row row-kontakt">
    <h2><?php echo $row['headline'];?></h2>
    <div class="grid">
        <div class="content">
            <?php echo $row['content'];?>
        </div>
        <div class="formular">
            <?php echo do_shortcode('[contact-form-7 id="'.$row['formular'].'" title="Kontaktformular 1"]');?>
        </div>
    </div>
</div>