<?php
function account($str){
    $index = '/^[_a-z0-9]{6,}$/';
    if (preg_match($index, $str)){
        echo $str.' hop le '.'<br/>';
    }else{
        echo $str.' khong hop le '.'<br/>';
    }
}
account('123463dh');
account('_abctdts');
account('acbd');