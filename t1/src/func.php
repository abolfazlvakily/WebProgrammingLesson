<?php
function q0() {
    $length = $_POST["length"];
    $width = $_POST["width"];
    return $length * $width;
}

function q1() {
    $base = $_POST["base"];
    $height = $_POST["height"];
    return ($base * $height) / 2;
}

function q2() {
    $number = $_POST["number"];
    if($number % 2 == 0){
        return "عدد زوج است."; 
    }
    return "عدد فرد است.";
}

function q3() {
    $number = $_POST["number"];  
    $factorial = 1;  
    for ($x=$number; $x>=1; $x--)   
    {  
    $factorial = $factorial * $x;  
    }
    return $factorial;
}

function q4($number=null) {
    function Fibonacci($number){ 
        if ($number == 0){
            return 0;
        }
        else if ($number == 1){
            return 1;
        }
    
        else
            return (Fibonacci($number-1) + Fibonacci($number-2));
    }
    $number = $_POST["number"];
    $arr = array();
    for ($counter = 0; $counter < $number; $counter++){
        array_push($arr, Fibonacci($counter));
    }
    $tmp = implode("-->",$arr);
    return $tmp;
}

function q5() {
    return '$q';
}

function q6() {
    return '$q';
}

function q7() {
    return '$q';
}

function q8() {
    return '$q';
}

function q9() {
    return '$q';
}

function q10() {
    return '$q';
}

function answer($q) {
    switch ($q) {
        case 'q0':
            return q0();
            break;
        case 'q1':
            return q1();
            break;
        case 'q2':
            return q2();
            break;
        case 'q3':
            return q3();
            break;
        case 'q4':
            return q4();
            break;
        case 'q5':
            return q5();
            break;
        case 'q6':
            return q6();
            break;
        case 'q7':
            return q7();
            break;
        case 'q8':
            return q8();
            break;
        case 'q9':
            return q9();
            break;
        case 'q10':
            return q10();
            break;
        default:
            return "err";
}
};

?>