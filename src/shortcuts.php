<?php 
/**
 * 
 */

// namespace Frootbox\Debug;

function d ( $input ) {
    
    http_response_code(500);

    while (ob_get_level() > 0) {
        ob_end_flush();
    }
    
    p($input);
    
    exit;
}

function p ( $input ) {
    
    echo "<pre>";
    
    ob_start();
    
    print_r($input);
    
    $input = ob_get_contents();
    
    ob_end_clean();
    
    $input = str_replace('>', '&gt;', $input);
    $input = str_replace('<', '&lt;', $input);
    
    
    print_r($input);
    
    echo "</pre>";
}

function l ( $input = null ) {

    $bt = debug_backtrace();
    $caller = array_shift($bt);

    p('Line: ' . $caller['line'] . ' @ File ' . $caller['file']);
    d($input);
}

function dumpBacktrace(array $backtrace) {

    foreach ($backtrace as $section) {
        p($section['file']);
        p($section['line']);
    }

    exit;

}