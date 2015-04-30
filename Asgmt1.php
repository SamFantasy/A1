<?php
/*
Samuel Bui
Assignment 1

Your task is to find the perimeter, area, sine, cosine, and tangent of a triangle. The given sides are:
•	14.8
•	20.3
•	25.3
And given angles are:
•	36
•	53
•	91

Expected Outcome (example)

side1= 14.8
side2 = 20.3
side3 = 25.3

angle1 = 36
angle2 = 53
angle3 = 91

*/


$a = 14.8;      //opposite 
$b = 20.3;       //Adjacent  
$c = 25.3;       //Hypotenuse 

$angle1 = 36;
$angle2 = 53;
$angle3 = 91;
    
    
function Perimeter ($a, $b, $c)
{
    return $perimeter = $a + $b + $c;
}
 echo "The perimeter of the triangle is : ". round(Perimeter($a, $b, $c),2);

echo "<br/>";
echo "<br/>";
function Area ($a, $b, $c)
{
    $p = ($a + $b + $c)/2;
    return $area = sqrt($p*($p-$a)*($p-$b)*($p-$c));
}
 echo "The area of the triangle is : ".round(Area($a, $b, $c),2);
echo "<br/>";



// echo "The area of the triangle is : ".Area($b, $h);




function Sine ($angle)
{
 return sin(deg2rad($angle));
}

    echo "<br/>The Sine of the ".$angle1." degree angle is : ".round(Sine($angle1),2);
    echo "<br/>The Sine of the ".$angle2." degree angle is : ".round(Sine($angle2),2);
    echo "<br/>The Sine of the ".$angle3." degree angle is : ".round(Sine($angle3),2);

echo "<br/>";

function Cosine ($angle)
{
 return cos(deg2rad($angle));
}

echo "<br/>The Cosine of the ".$angle1." degree angle is : ".round(cos($angle1),2);
echo "<br/>The Cosine of the ".$angle2." degree angle is : ".round(cos($angle2),2);
echo "<br/>The Cosine of the ".$angle3." degree angle is : ".round(cos($angle3),2);

echo "<br/>";

function Tangent ($angle)
{
 return tan(deg2rad($angle));
}

echo "<br/>The Tangent of the ".$angle1." degree angle is : ".round(tan($angle1),2);
echo "<br/>The Tangent of the ".$angle2." degree angle is : ".round(tan($angle2),2);
echo "<br/>The Tangent of the ".$angle3." degree angle is : ".round(tan($angle3),2);



?>