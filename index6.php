<?php
    $i=1;
    $pro=1;
    $sum=0;
        while ($i<=20){
            $pro=$pro*$i;
            $i++;
        }

    $i=1;
      
        while ($i<=30){
            $sum=$sum+$i;
            $i++;
        }
        $rez=$pro-$sum;
        echo $rez;

        echo "<br>";    

    $pro1=1;
    $sum1=0;
        for ($i=1; $i<=20; $i++){
            $pro1=$pro1*$i;
        }
     
        for ($i=1; $i<=30; $i++){
            $sum1=$sum1+$i;
        }
        $rez1=$pro1-$sum1;
        echo $rez1;

    echo "<br>";

    $n=10;
    $m=15;
    $i=$n;
    $sum=0;
        while ($i<=$m){
            $sum=$sum+pow($i,3);
            $i++;
        }
    echo $sum;

    echo "<br>";

    $n=10;
    $m=15;
    $sum=0;
        for ($i=$n; $i<=$m; $i++){
            $sum=$sum+pow($i,3);
        }
    echo $sum;

    echo "<br>";

    
    function digitron($a, $b, $operacija)
    {
        if ($operacija=="+")
        {
            echo $a+$b;
        }
        elseif ($operacija=="-")
        {
            echo $a-$b;
        }
        elseif ($operacija=="*")
        {
            echo $a*$b;
        }
        elseif ($operacija=="/")
        {
            echo $a/$b;
        }
           
    }
    digitron($a, $b, "+");
    digitron($a, $b, "-");
    digitron($a, $b, "*");
    digitron($a, $b, "/");
?>