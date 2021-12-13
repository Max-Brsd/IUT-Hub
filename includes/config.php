<?php
session_start();
define("ADRESSE", "71 Rue Peter Fink, 01000, Bourg-en-Bresse");
function webp(){
    if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' )) {
        return '.webp';
    }
    else {
        return ;
    }
}