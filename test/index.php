<?php
/*1.zadatak*/

function suma($n, $m)
{   
    $s=0;
    for ($i=$n; $i<=$m; $i++)
    {
        if ($i%3==0 and $i!=7)
        {
            $s=$s+$i;
        }
    }
    return $s;
}
$s=suma(2,20);
echo $s;

/*2. zadatak */

function ispis($color, $font, $n)
{
    $i=0;
    while ($i<$n)
    {
        $i++;
        echo "<p style='color:$color; font-size:$font'>gkhfdd</p>";
    }

}
echo ispis("red", 40, 10);
/*3.zadatak*/

function krvnaGrupa($n)
{
switch ($n)
    {
    case "A+":
        echo "Moze primiti A+,0+; moze dati krv A+, AB+";
    break;
    case "0+":
        echo "Moze primiti 0+; moze dati krv A+,AB+,B+,0+";
    break;
    case "B+":
        echo "Moze primiti krv B+,AB+; moze dati krv 0+, B+";
    break;
    case "AB+":
        echo "Moze primiti sve krvne grupe; moze dati krv AB+";
    break;
    default:
        echo "Los unos!";

    }
}
krvnaGrupa("B+");
?>