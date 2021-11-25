<?php

function autoload($classname) {
    if (file_exists(_DIR_.'/../classes/'.strtolower($classname).'.class.php)) {
        require_once(_DIR_.'/../classes/'.strtolower($classname).'.class.php');
    }
}
spl_autoload__register('autoload');

