<?php
function reqinput($input){
    if(empty($input)){
        return true;

    }else return false;
};
function minreqinput($input,$length){
    if(strlen($input)<$length){
        return true;

    }else return false;
}
function maxreqinput($input,$length){
    if(strlen($input)>$length){
        return true;

    }else return false;
}
?>