<?php
function test($str){
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($pattern, $str)){
        echo $str .' hop le '.'<br>';
    }else{
        echo $str. ' ko hop le '.'<br>';
    }
}
test('asd@gmail.com');
test('@gmail.com');
