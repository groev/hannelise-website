<?php 
    $rows = get_field('content');
    if($rows):foreach($rows as $row):
        include HLPATH.'/rows/'.$row['acf_fc_layout'].'.php';
    endforeach;endif;