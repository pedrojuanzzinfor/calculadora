<?php
$n1= $_POST["num1"];
$op= $_POST["operation"];
$n2= $_POST["num2"];
$resul;
switch ($op){
    case "+":
       $resul = $n1 + $n2;
    break;
    case "-":
       $resul = $n1 - $n2;
    break;
    case "*":
        $resul = $n1 * $n2;
    break;
    case "/":
        if ($n2==0) {$resul='ERROR';}
        else {$resul = $n1 / $n2;}
    break;
}
Header("location:resultado.php?resul=".$resul); 
?>

