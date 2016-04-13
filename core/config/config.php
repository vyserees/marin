<?php

$auxilium = array();
$auxilium['APP_NAME'] = '';
$auxilium['APP_URL'] = '';
$auxilium['APP_TIMEZONE'] = 'Europe/Belgrade';
//$auxilium['DEBUG'] = TRUE;
$auxilium['ROUTER'] = TRUE;

foreach ($auxilium as $constant => $value) {
    
    define($constant, $value);
    
}


 

