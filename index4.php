<?php
$br=0;
for ($i=5; $i<=150; $i++){
    if($i%13==0){
    $br=$br+1;/*$br++; $br+=1*/
    }
}
echo $br;

echo "<br>";

$n=3;
$m=20;
$sum=0;
$br=0;

for ($i=$n; $i<=$m; $i++){
    $sum=$sum+$i;
    $br=$br+1;
   }
$ar=$sum/$br;
echo $ar;

echo "<br>";

$n=-4;
$m=20;
$neg=0;
$br=0;

for ($i=$n; $i<=$m; $i++){
    if($i<0){
        $neg=$neg+1;
    }
    else {
        $br=$br+1;}
}
echo $br; 
echo "<br>";
echo $neg;

echo "<br>";

$br=0;
for ($i=5; $i<=50; $i++){
    if ($i%3==0 or $i%5==0)
    $br=$br+1;
}
echo $br;

echo "<br>";

$n=5;
$m=20;
$sum=0;
$br=0;

for ($i=$n; $i<=$m; $i++){
    $pos=$i%10;
    if ($pos==4){
        $sum+=$i;
        $br++;
    }
}
echo $sum;
echo "<br>";
echo $br;

echo "<br>";

$n=9;
$m=20;
$a=2;
for ($i=$n; $i<=$m; $i++){
    if ($i%$a==0){
    echo $i;
    }
}


echo "<br>";

$n=9;
$m=20;
$a=2;
for ($i=$n; $i<=$m; $i++){
    if ($i%$a!=0){
    echo $i;
    }
}

echo "<br>";

$n=9;
$m=20;
$a=2;
$sum=0;
for ($i=$n; $i<=$m; $i++){
    if ($i%$a!=0){
    $sum=$sum+$i;
    }
}
echo $sum;

echo "<br>";

$n=9;
$m=20;
$a=2;
$pro=1;
for ($i=$n; $i<=$m; $i++){
    if ($i%$a==0){
    $pro=$pro*$i;
    }
}
echo $pro;

echo "<br>";











?>