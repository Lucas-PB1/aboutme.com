<?php

function contains($value, $search)
{
    if (strpos($value, $search) !== false) {
        return true;
    } else {
        return false;
    }
}

function generate_id(){
    return md5(md5(rand(1, 9999)*rand(1, 10)));
}

function encript_key($senha){
    $senha = md5(md5($senha));
    return $senha;
}

function my_replace($dado,$a,$b,$c,$d,$e){
    $new_data = str_replace($a,"",$dado);
    $new_data = str_replace($b,"",$new_data);
    $new_data = str_replace($c,"",$new_data);
    $new_data = str_replace($d,"",$new_data);
    $new_data = str_replace($e,"",$new_data);
    return $new_data;
}