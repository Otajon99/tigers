<?php
function getMax($num1, $num2, $num3)
{
   if($num1>$num2)
   {
      if($num1>$num3){
          echo" Maximum number is $num1";
      }
      else if ($num1<$num3){
          echo "Maximum number is $num3";
      }
      else{
          echo "Maximum number is $num2";
      }
   }
   else  if($num1<$num2)
   {
       if($num1>$num3){
           echo" Maximum number is $num2";
       }
       else if ($num1<$num3 && $num2<$num3){
           echo "Maximum number is $num3";
       }
       else{
           echo "Maximum number is $num2";
       }
   }
   else if($num1=$num2 ){
       if($num2>$num3) {
           echo " Maximum number is $num2";
       }
       else if($num2<$num3)
       {
           echo "Maximum number is $num3";
       }
       else{
           echo" All numbers are equil";
       }
   }
}
function getMin($num1,$num2,$num3)
{
    if($num1>$num2)
    {
        if($num2>$num3)
        {
            echo "Minimum number is $num3";
        }
        else if ($num2<$num3){
            echo "Minimum number is $num2";
        }
        else{
            echo "Minimum number is $num2";
        }
    }
    else if($num1<$num2)
    {
        if($num1<$num3)
        {
            echo"Minimum number is $num1";
        }
        elseif($num1>$num3){
            echo"Minimum number is $num3";
        }
        else{
            echo"Minimum number is $num1";
        }
    }
    else if($num1=$num2){
        if($num1>$num3)
        {
            echo"Minimum number is $num3";
        }
        else if($num1<$num3)
        {
            echo"Minimum number is $num1";
        }
        else{
            echo "All numbers are equil";
        }
    }
}
function getMiddle($num1,$num2,$num3)
{
    if($num1>$num2)
    {
        if($num1>$num3 && $num2<$num3)
        {
            echo" Middle number is $num2";
        }
        else if ($num1>$num3 && $num2>$num3 )
        {
            echo "Middle number is $num2";
        }
        else if( $num1<$num3){
            echo "Middle number is $num1";
        }
        else if ($num1=$num3){
            echo "We have two same number $num3 and smallar number is $num2";
        }
        else if($num2=$num3)
        {
            echo "We have two same number $num2 and bigger number is $num1";
        }
    }
    else if($num1<$num2)
    {
        if ($num1<$num3 && $num2<$num3)
        {
            echo "Middle number is $num2";
        }
        else if($num1<$num3 && $num2>$num3)
        {
            echo "Middle number is $num3";
        }
        else if($num1>$num3)
        {
            echo"Middle number is $num1";
        }
        else if($num1=$num3)
        {
            echo "We have two same number $num1 and bigger number is $num2";
        }
        else{
            echo "We have two same number $num2 and smoller number is $num1";
        }
    }
    else {
        echo "All numbers are same";
    }
}
$a=rand(1,100);
$b=rand(1,100);
$c=rand(1,100);

echo getMax($a, $b, $c); echo"<br>";
echo getMin($a, $b ,$c); echo"<br>";
echo getMiddle($a, $b ,$c); echo"<br>";
?>