<?php
function redirect($http = false)
{
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'http://armtek/';
    }
    header("Location: $redirect");
    exit;
}

function debug($arr, $die = false)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
    if ($die) die;
}