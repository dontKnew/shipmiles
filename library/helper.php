<?php

if(!function_exists("display")){
    function display($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        exit;
    }
}
