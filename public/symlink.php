<?php

$target = '/home/padmapra/penasaran.ga/storage/app/public'; 

$shortcut = '/home/padmapra/penasaran.ga/public/storage'; 

if(symlink($target, $shortcut)){
    echo readlink($shortcut);    
}

?>

