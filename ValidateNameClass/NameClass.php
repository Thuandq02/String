<?php
function NameClass($str){
    $test = '/^[CAP]+[0-9]{4}+[GHIKLM]$/';
    if (preg_match($test, $str)){
        echo $str.' hop le '.'<br>';
    }else{
        echo $str.' khong hop le '.'<br>';
    }
}
NameClass('C0920K');
NameClass('$0920K1');