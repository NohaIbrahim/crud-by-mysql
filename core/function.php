<?php
function checkRequestMethod($method){
    if($_SERVER['REQUEST_METHOD']==$method){
        return true;
    }
    return false;
};
function checkisset($input){
    if(isset($_POST[$input])){
    return true;
    }
    return false;
};
function santizeinput($input){
    return trim(htmlspecialchars(htmlentities($input)));
}
// $x=['name'=>'','age'=>23];
// if (isset($x['name'])){
//     echo 'good';
//     echo var_dump($x['name']);
// }else echo 'no';