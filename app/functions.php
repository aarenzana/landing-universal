<?php

/**
* @function getCustomModule
*
*
*/
function getCustomModule($module, $id_cartas){
    $default_mod = $root.'default/'.$module.'.tmpl.php';
    $custom_mod  = $root.'views/'.$id_cartas.'/'.$module.'.tmpl.php';

    if(file_exists($custom_mod)){
        include ($custom_mod);
    }
    elseif(file_exists($default_mod)){
        include ($default_mod);
    }
    else{
        echo '<script> console.log("Template module \"'.$module.'\" does not exist");</script>';
    }
}
