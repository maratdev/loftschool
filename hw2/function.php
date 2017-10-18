<?php
$array = ['Строка1','Строка2','Строка3','Строка4','Строка5'];

function task1($data, $bool =false){
    foreach($data as $value){
        echo '<p>'.$value.'</p>';
    }
    if( $bool == true){
        echo '<p>'.implode(' | ',$data).'</p>';
    }

}


function task2($arr, $act) {
    if (!function_exists(checkNumber)) {
        function checkNumber($num) //проверка, что это целое или вещественное число, иначе возврвщает единицу - вторая проверка
        {
            if (is_int($num) || is_float($num))
                return $num;
            else return 1;
        }
    }
    switch ($act) {
        case '+': $func = function($a,$b) {
            return $a+$b;
        };
            break;
        case '-': $func = function($a,$b) {
            return $a-$b;
        };
            break;
        case '*': $func = function($a,$b) {
            return $a*$b;
        };
            break;
        case '/': $func = function($a,$b) {
            return $a/$b;
        };
            break;
        default: $func = function($a,$b) {
            return $a; //если символ не знак арифметической операции, то возвращаем начальное число  - одна проверка
        };
    }
    for($i=1,$resNum = checkNumber($arr[0]),$res = (string)$arr[0]; $i<count($arr); $i++) {
        $res .= ' '.$act.' '.$arr[$i];
        $resNum = $func($resNum,checkNumber($arr[$i]));
    }
    return $res.' = '.$resNum;
}

function task3($arr,$act) {
    if (!function_exists(checkNumber)) {
        function checkNumber($num)
        {
            if (is_int($num) || is_float($num))
                return $num;
            else return 1;
        }
    }
    switch ($act) {
        case '+': $func = function($a,$b) {
            return $a+$b;
        };
            break;
        case '-': $func = function($a,$b) {
            return $a-$b;
        };
            break;
        case '*': $func = function($a,$b) {
            return $a*$b;
        };
            break;
        case '/': $func = function($a,$b) {
            return $a/$b;
        };
            break;
        default: $func = function($a,$b) {
            return $a;
        };
    }
    for($i=1,$resNum = checkNumber($arr[0]),$res = (string)$arr[0]; $i<count($arr); $i++) {
        $res .= ' '.$act.' '.$arr[$i];
        $resNum = $func($resNum,checkNumber($arr[$i]));
    }
    return $res.' = '.$resNum;
}

function task4($x,$y) {
    if (is_int($x) && is_int($y)){
        $res = '<table class="multiply-table" >';
        for ($i=1; $i<=$y ;$i++) { //цикл по вертикали
            $res .= '<tr>';
            for ($j=1; $j<=$x; $j++) {
                $res .= '<td>'.$i*$j.'</td>';
            }
            $res .= '</tr>';
        }
        $res .= '<table>';
        return $res;
    } else echo 'Одно из переданных аргументов - не целое число';
}