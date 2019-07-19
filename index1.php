<html>
    <head>
        <style>
        img{
            width:150px;
        }
        </style>
    </head>
<body>



<?php
 $date=date("Y");
 $godine=1994;
 $trenutnoGod=$date-$godine;
 echo " osoba je stara ". $trenutnoGod . "god." ;

 echo "<br>";

 $pol="M";
 if ($pol=="M"){
     echo "<img src='images/man.jpg'>";
 }
 else {echo "<img src='images/woman.png'>";}

 echo "<br>";

 $visinaCm=173;
 $visinaM=$visinaCm/100;
 echo "visina je" . $visinaM . "m";

 echo "<br>";

$tezina=66;

echo "tezina je " . $tezina . "kg";

echo "<br>";

$BMI=$tezina/($visinaM*$visinaM);
echo "BMI = " . $BMI ;

echo "<br>";

if ($BMI<=18.5){
    echo "osoba je pothranjena";
}
elseif ($BMI<24.9){
    echo "osoba je normalne tezine";
}
elseif ($BMI<29.9){
    echo "osoba ima povisenu tezinu";
}
else { echo "osoba ima prekomernu tezinu";}

?>
</body>
</html>