<html>
    <head>
        <style>
            .blue{
                color:blue;
            }
            .yellow{
                color:yellow;
            }
            .red{
                color:red;
            }
            img{
                width:150px;
                margin-bottom:5px;
            }
        </style>
    </head>
<body>
<?php
    $a = 31;
    $b = 9;
    $kolicnik = 0;
    $ostatak = $a;
    while ($ostatak>=$b){
        $ostatak=$ostatak-$b;
        $kolicnik++;
    }
    echo "$a = $kolicnik * $b + $ostatak";

    echo "<br>";

    $text="Some text blablablabla...";
    $i = 1;
    while ($i<=6){
        if ($i%3==1){
            echo "<p class='blue'>$text<p>";
        }
        elseif ($i%3==2){
            echo "<p class='yellow'>$text<p>";
        }
        else {echo "<p class='red'>$text<p>";}
        $i++;
    }

    echo "<br>";

    $i=1;
    $sum=0;

    while ($i<=100){
        $sum = $sum+$i;
        $i++;
    }
    echo $sum;

    echo "<br>";

    $i = 1;
    $n = 7;
    $sum=0;

    while ($i<=$n){
        $sum = $sum+$i;
        $i++;
    }
        echo $sum;

    echo "<br>";

    $n=20;
    $m=50;
    $sum = 0;

    while ($n<=$m){
        $sum=$sum+$n;
        $n++;
    }
        echo $sum;

    echo "<br>";

    $n=860;
    $i=1;
    $sum=0;
    while ($i<=$n){
        $sum=$sum+$i;
        $i++;
    }
    echo $sum;

    echo "<br>";

    $n=5;
    $m=5;
    $suma=0;

    if ($n<$m){
        $suma=0;
        $i=$n;
        while ($i<=$m){
            $suma = $suma+$i;
            $i++;
        }
    }
    else {
        $suma=0;
        $i=$m;
        while ($i<=$n){
            $suma=$suma+$i;
            $i++;
        }
    }
    echo $suma;

    echo "<br>";


    $n=3;
    $m=10;
    $pro=1;

    while ($n<=$m){
        $pro=$pro*$n;
        $n++;
    }
        echo $pro;


    echo "<br>";

    $n=2;
    $m=10;
    $sum=0;
    while ($n<=$m){
        $sum = $sum+pow($n,2) ;
        $n++;
    }
    echo $sum;

    echo "<br>";
    
    for ($i=1; $i<=20; $i++){
        echo "Na redu je br. $i";
        echo "<br>";
    }

    echo "<br>";

    for ($i=20; $i>=1; $i--){
        echo "Na redu je br. $i";
        echo "<br>";
    }

    echo "<br>";

    for ($i=1; $i<=20; $i++){
        if ($i%2==0){
            echo "Na redu je br. $i";
            echo "<br>";
        }
    }

    echo "<br>";/*$i+=2*/
    for ($i=2; $i<=20; $i=$i+2){
            echo "Na redu je br. $i";
            echo "<br>";
    }

    echo "<br>";


    for ($i=5; $i<=15; $i++){
        $n=$i*2;
        echo "Na redu je br. $n"; /*echo 2*$i*/
        echo "<br>";
    }

    echo "<br>";

    for ($i=1; $i<=100; $i++){
        $sum=$sum+$i;
    }
    echo $sum;

    echo "<br>";

    $n=20;
    $sum=0;
    for ($i=1; $i<=$n; $i++){
        $sum=$sum+$i;
    }
    echo $sum;

    echo "<br>";

    $n=20;
    $m=30;
    $sum=0;

    for ($i=$n; $i<=$m; $i++){
        $sum=$sum+$i;
    }
    echo $sum;

    echo "<br>";

    $n=2;
    $m=30;
    $pro=1;

    for ($i=$n; $i<=$m; $i++){
        $pro=$pro*$i;
    }
    echo $pro;

    echo "<br>";

    $n=2;
    $m=10;
    $suma=0;

    for ($i=$n; $i<=$m; $i++){
        $suma=$suma+pow($i,2);
    }
    echo $suma;

    echo "<br>";

    for ($i=1; $i<=3; $i++){
        echo "<img src='images/$i.jpg'>";
        echo "<br>";
    }

    echo "<br>";

    $m=30;
    $suma=0;

    for ($i=1; $i<=$m; $i++){
        if ($i%9==0){
            $suma=$suma+$i;
        }
    }
    echo $suma;
  
    echo "<br>";

    $n=20;
    $m=100;
    $pro=1;

    for ($i=$n; $i<=$m; $i++){
        if ($i%11==0){
            $pro=$pro*$i;
        }
    }
    echo $pro;
?>
</body>
</html>