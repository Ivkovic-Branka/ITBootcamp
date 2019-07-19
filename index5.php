<?php

   /* function mojaFunkcija()
    {
        echo "Zdravo svete!";
    }
    mojaFunkcija();
    mojaFunkcija();
    mojaFunkcija();

    echo "<br>";
    
    function funkcija ($text)
    {
        echo $text;
    }
    $text = "Zdravoooooo!";
    funkcija($text);

    echo "<br>";

    function korisnik($ime, $prezime)
    {
        echo "$ime $prezime";
    }
    $ime="Branka";
    $prezime="Ivkovic";
     korisnik ($ime, $prezime);
     echo "<br>";
     korisnik ("Jovan", "Jocic");
     korisnik ($ime, $prezime);

     echo "<br>";

     function zdravo()
     {
        echo "Zdravo!! <br>";
     }
     for ($i=1; $i<=5; $i++)
     {
         zdravo();
     }

     echo "<br>";

     function it($i)
     {
         echo "broj $i";
     }
     for ($i=1; $i<=5; $i++)
     {
         it($i);
     }

     echo "<br>";

     function ime($i)
     {
         echo "Branka <br>";
     }
     for ($i=1; $i<=5; $i++)
     {
         ime($i);
     }

     echo "<br>";

     function prezime($i)
     {
         echo "Ivkovic    ";
     }
     for ($i=1; $i<=10; $i++)
     {
         prezime($i);
     }
    
     echo "<br>";

     function kvadrat($x)
     {
          return $x*$x;
     }
     echo kvadrat(5);

     echo "<br>";

     function zbir($a, $b)
     {
         $rez=$a+$b;
         echo $rez;
     }

     zbir(10, 50);
     $a=5;
     $b=7;
     zbir($a, $b);
     $x=2;
     $y=4;
     zbir($x, $y);
     zbir($x, $x);

     echo "<br>";

     function zbircic($a, $b)
     {
         $rez=$a+$b;
         return $rez;
     }
     $rezultat=zbircic(5,6);
     echo $rezultat;

     echo "<br>";

     function mnozenje($a, $b)
     {
         $rez=$a*$b;
         return $rez;
     }
        $c=mnozenje(3,4);
        $d=mnozenje(2,2);
        echo mnozenje($c, $d);

        echo "<br>";

        function oduzimanje($a, $b)
        {
            $rez=$a-$b;
            return $rez;
        }
        echo oduzimanje(oduzimanje(10,3), oduzimanje(4,2));

        echo "<br>";

        echo oduzimanje(kvadrat(3),3);*/

        echo "<br>";

        function pozdrav($ime, $prezime)
        {
            echo "Pozdrav $ime  $prezime";
        }
         pozdrav("Jelena", "Matejic");

        echo "<br>";

        function zbir($a, $b)
        {
            $rez=$a+$b;
            return $rez;
        }
        echo zbir(4, 5);

        echo "<br>";

        function neparan($n)
        {
            if ($n%2==0) 
            {
                return "paran";
            }
            else 
            {
                return "neparan";
            }
        }
        echo neparan(3);

        echo "<br>";

        function maksDva($a, $b)
        {
            if ($a>$b)
            {
                return $a;
            }
            else
            {
                return $b;
            }
        }
        $m2 = maksDva(2,5);
        echo $m2;

        echo "<br>";

        function maksCetiri($a, $b, $c, $d)
        {
            $maks1 = maksDva($a, $b);
            $maks2 = maksDva($c, $d);
            $maks = maksDva($maks1, $maks2);
            return $maks;
        }
        $m = maksCetiri(1,2,3,4);
        echo $m;

        /*maks=maksDva(maksDva($a, $b), maksDva($c, $d)) */

        echo "<br>";

        function slika($image)
        {
            echo "<img src=$image>";
        }
            $image="images/1.jpg";/*slika("images/1.jpg"), slika("images/2.jpg")...*/
            slika($image);
           

        echo "<br>";

        function boja($txt, $color)
        {
            echo "<p style='color:$color'>$txt</p>";
        }
            boja("gfusrf", "blue");

        echo "<br>";

        function pismo($txt, $font)
        {
            echo "<p style='font-size:$font'>$txt</p>";
        }
        pismo("sdfhskufh", "12px");

        echo "<br>";

        function velicina($txt, $font)
        {
            for ($i=$font; $i<$font+5; $i++)
            {
                echo "<p style='font-size:$i'>$txt</p>";
            }
        }
        velicina("ITBoot", 20);

        echo "<br>";

        function sedmiDan($n)
        {
            switch($n)
            {
                case $n%7==1:
                    return "Ponedeljak";
                    break;
                case $n%7==2:
                    return "Utorak";
                    break;
                case $n%7==3:
                    return "Sreda";
                    break;
                case $n%7==4:
                    return "Cetvrtak";
                    break;
                case $n%7==5:
                    return "Petak";
                    break;
                case $n%7==6:
                    return "Subota";
                    break;
                case $n%7==7:
                    return "Nedelja";
                    break;
            }
        }
        $danNedelje=sedmiDan(2);
        echo "<p>$danNedelje</p>";

        echo "<br>";
        function deljivSaTri($n, $m)
        {
            $br=0;
            for($i=$n; $i<$m; $i++)
            {
                if($i%3==0)
                    echo "$i <br>";
                    $br++;
            }
        }
        echo $br;
        deljivSaTri(3, 10);
      
        echo "<br>";

        $n=5;
        $m=15;

        for ($i=$n; $i<=$m; $i++)
        {
            $br=0;
            if($i%2==0)
            {
                $br++;
            }
            if($i%3==0)
            {
                $br++;
            }
            if($i%5==0)
            {
                $br++;
            }
            if($i%7==0)
            {
                $br++;
            }
            if($br==2)
            {
                echo "<p>$i</p>";
            }
        }




        









    







?>