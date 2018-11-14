<?php 
/**
 * 
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../src/Debug.php';
require '../src/shortcuts.php';

use function Frootbox\Debug\d;

d([
    'A', 'B', 'C', 'D'
]);