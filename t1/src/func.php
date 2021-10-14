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
    $number = $_POST["number"];  
    $revnum = 0;  
    while ($number > 1)  
    {  
        $rem = $number % 10;
        $revnum = ($revnum * 10) + $rem;  
        $number = ($number / 10);
    }
    return $revnum;
}

function q6() {
    $r_number = q5();
    if ($_POST["number"] == $r_number)
    {
        return 'معکوس عدد با خود عدد برابر است.';
    }
    return 'معکوس عدد با خود عدد برابر نیست.';
}

function q7() {
    $count = 0;  
    $num = 2;
    $arr = array();
    while ($count < $_POST["number"] )  
    {  
    $div_count=0;  
    for ( $i=1; $i<=$num; $i++)  
    {  
    if (($num%$i)==0)  
    {  
    $div_count++;  
    }  
    }  
    if ($div_count<3)  
    {
        array_push($arr, $num); 
        $count=$count+1; 
    }  
    $num=$num+1;  
    }
    $tmp = implode("-->",$arr);
    return $tmp;
}

function q8() {
    $tmp = "";
    $n = 4;
    $count = 1;
    for ($i = $n; $i > 0; $i--)
    {
        for ($j = $i; $j < $n + 1; $j++)
        {
            $tmp = $tmp.$count;
            $count++;
        }
        $tmp = $tmp.'\n';
    }
    return $tmp;
}

function q9() {
    $tmp = "";
    for ($i = 1; $i < 6; $i++){
        for ($j = 1; $j <= $i; $j++){
            $tmp = $tmp.$j.',';
        }
        $tmp = $tmp.'\n';
    }
    return $tmp;
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