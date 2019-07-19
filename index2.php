<?php
    $boja="zelena";

    switch ($boja)
    {
        case "crvena":
            echo "Odabrali ste crvenu boju!";
        break;
        case "plava":
            echo "Odabrali ste plavu boju!";
        break;
        case "zelena":
            echo "Odabrali ste zelenu boju!";
        break;
        default:
            echo "Niste izabrali crvenu, plavu ni zelenu!";
    }
    echo "<br>";
    if ($boja=="crvena"){
        echo "crvena";
    }
    elseif ($boja=="zelena"){
        echo "zelena";
    }
    else {echo "plava";}

    echo "<br>";

    $danNedelje=date("N");

    switch ($danNedelje)
    {
        case 1:
            echo "Pondeljak";
        break;
        case 2:
            echo "Utorak";
        break;
        case 3:
            echo "Sreda";
        break;
        case 4:
            echo "Cetvrtak";
        break;
        case 5:
            echo "Petak";
        break;
        case 6:
            echo "Subota";
        break;
        case 7:
            echo "Nedelja";
        break;
        default:
            echo "Los unos";
    }

    echo "<br>";

    $ocena=3; 
        switch ($ocena)
        {
            case 1:
                echo "nedovoljan";
            break;
            case 2:
                echo "dovoljan";
            break;
            case 3:
                echo "dobar";
            break;
            case 4:
                echo "vrlo dobar";
            break;    
            case 5:
                echo "odlican";
            break;
            default:
                echo "Los unos";
        }

        echo "<br>";

    $broj=6;
        switch ($broj){
            case 0:
                echo "broj je nula";
            break;
            case 2:
                echo "broj je dva";
            break;
            case 4:
                echo "broj je cetiri";
            break;
            case 6:
                echo "broj je sest";
            break;
            case 8:
                echo "broj je osam";
            break;
            default:
                echo "Los unos";
        }

        echo "<br>";

        $br1=3;
        $br2=6;
        $karakter="M";

        switch ($karakter){
            case "M":
            case "m":
                $rez=$br1*$br2;
            break;
            case "S":
                $rez=$br1+$br2;
            break;
            case "O":
                $rez=$br1-$br2;
            break;
            case "D":
                $rez=$br1/$br2;
            break;
            default:
                echo "Los unos";
                
        }  echo $rez;

        echo "<br>";

        $dan=date("N");
        switch ($dan){
            case 1:
                echo "preostalo je 4 dana";
            break;
            case 2:
                echo "preostalo je 3 dana";
            break;
            case 3:
                echo "preostalo je 2 dana";
            break;
            case 4:
                echo "presotao je 1 dan";
            break;
            case 5:
                echo "evo ga, tu je...";
            break;
            case 6:
                echo "vikend je";
            break;
            case 7:
                echo "2 dan vikenda";
            break;
            default:
                echo "Los unos";
            }

        echo "<br>";

        $mesec=date("m");
        
        switch ($mesec){
            case "01":
                echo "Januar";
            break;
            case "02":
                echo "Februar";
            break;
            case "03":
                echo "Mart";
            break;
            case "04":
                echo "April";
            break;
            case "05":
                echo "Maj";
            break;
            case "06":
                echo "Jun";
            break;
            case "07":
                echo "Jul";
            break;
            case "08":
                echo "Avgust";
            break;
            case "09":
                echo "Septembar";
            break;
            case "10":
                echo "Oktobar";
            break;
            case "11":
                echo "Novembar";
            break;
            case "12":
                echo "Decembar";
            break;
            default:
                echo "Los unos";
        }
        
            echo "<br>";

            $mesec=date("m");
            $godina=date("Y");
            if ($godina%4==0){
                echo "godina je prestupna";
            }
            else {echo "godina nije prestupna";}

            echo "<br>";
        
            switch ($mesec){
                case "01":
                    echo "31 dan";
                break;
                case "02":
                    echo "28 dana";
                break;
                case "03":
                    echo "31 dan";
                break;
                case "04":
                    echo "30 dana";
                break;
                case "05":
                    echo "31 dan";
                break;
                case "06":
                    echo "30 dana";
                break;
                case "07":
                    echo "31 dan";
                break;
                case "08":
                    echo "31 dan";
                break;
                case "09":
                    echo "30 dana";
                break;
                case "10":
                    echo "31 dan";
                break;
                case "11":
                    echo "30 dana";
                break;
                case "12":
                    echo "31 dan";
                break;
                default:
                    echo "Los unos";
            }
        echo "<br>";

        $i=1;

        while ($i<=10){
            echo $i;
            echo "<br>";
            $i++;
        }

        echo "<br>";

        $i=0;
        while ($i<10){
            $i++;
            echo $i;
            echo "<br>";
        }

        echo "<br>";

        $i=1;
        while ($i<=20){
            echo $i;
            echo "<br>";
            $i++;
        }

        echo "<br>";

        $i=20;
        while ($i>=1){
            echo $i;
            echo "<br>";
            $i--;
        }

        echo "<br>";

        $i = 0;
        while ($i<20){
            echo 20-$i;
            echo "<br>";
            $i++;
            
        }

        $i=2;

        while ($i<=20){

            if ($i%2==0){
            echo $i;
            echo "<br>";
            }
            $i++;
        }

        echo "<br>";

        $i=2;
        while ($i<=20){
            echo $i;
            echo "<br>";
            $i = $i + 2;
        }

        echo "<br>";

        $a=82;
        $b=8;
        $kolicnik=0;
        $ostatak=$a;
        while ($ostatak>$b){
            $ostatak=$ostatak-$b;
            $kolicnik++;
        }
        echo "$a = $kolicnik * $b + $ostatak";
        echo "<br>";




    


       




?>