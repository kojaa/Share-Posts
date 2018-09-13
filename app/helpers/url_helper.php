<?php



function redirect($url){
    header('Location: '. URLROOT . $url);
}