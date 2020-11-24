<?php
function Phone($str){
    $test = '/[0-9]{2}+(\-[0-9]{10})$/';
    if (preg_match($test, $str)){
        echo $str.' hop le '.'<br>';
    }else{
        echo $str.' khong hop le '.'<br>';
    }
}
Phone('84-0978123456');
Phone('840978123456');