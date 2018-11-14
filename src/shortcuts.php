<?php 
/**
 * 
 */

namespace Frootbox\Debug;

function d ( $input ) {
    
    echo "<pre>";
    print_r($input);
    echo "</pre>";
    exit;
}