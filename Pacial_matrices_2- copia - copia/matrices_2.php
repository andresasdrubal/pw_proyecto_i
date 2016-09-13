<?php 


   //-----------------operaciones entre las matrices A-B suma, resta y multilplicacion--------------//

$a11=$_POST['a11'];
$MA11=(int)$a11;

$MA12=$_POST['a12'];
$MA13=$_POST['a13'];
$MA21=$_POST['a21'];
$MA22=$_POST['a22'];
$MA23=$_POST['a23'];
$MA31=$_POST['a31'];
$MA32=$_POST['a32'];
$MA33=$_POST['a33'];
$MB11=$_POST['b11'];
$MB12=$_POST['b12'];
$MB13=$_POST['b13'];
$MB21=$_POST['b21'];
$MB22=$_POST['b22'];
$MB23=$_POST['b23'];
$MB31=$_POST['b31'];
$MB32=$_POST['b32'];
$MB33=$_POST['b33'];

$op=$_POST['operacion'];


function calcular_matrices_A_B($x11,$x12,$x13,$x21,$x22,$x23,$x31,$x32,$x33,$y11,$y12,$y13,$y21,$y22,$y23,$y31,$y32,$y33,$cal){



   switch ($cal) {
     case "+":

     echo"<br> La SUMA de la matriz A con la matriz B es:<br>";

         echo"MATRIZ A <br>";
         echo"[",$x11,"] [",$x12,"] [",$x13,"]<br>";
         echo"[",$x21,"] [",$x22,"] [",$x23,"]<br>";
         echo"[",$x31,"] [",$x32,"] [",$x33,"]<br>";

         echo" <br> + <br>";

         echo"MATRIZ B <br>";
         echo"[",$y11,"] [",$y12,"] [",$y13,"]<br>";
         echo"[",$y21,"] [",$y22,"] [",$y23,"]<br>";
         echo"[",$y31,"] [",$y32,"] [",$y33,"]<br>";

         echo" <br> = <br>";



      $S11=$x11+$y11;
      $S12=$x12+$y12;
       $S13=$x13+$y13;
     
      echo"[",$S11,"] [",$S12,"] [",$S13,"]<br>";
      
   
      $S21=$x21+$y21;
      $S22=$x22+$y22;
      $S23=$x23+$y23;
      
      echo"[",$S21,"] [",$S22,"] [",$S23,"]<br>";
   

   
      $S31=$x31+$y31;
      $S32=$x32+$y32;
      $S33=$x33+$y33;
      echo"[",$S31,"] [",$S32,"] [",$S33,"]<br>";
    break;

     case "-":
        echo"<br> La resta de la matriz A con la matriz B es:<br>";
        $S11=$x11-$y11;
      	$S12=$x12-$y12;
       	$S13=$x13-$y13;
    	  echo"[",$S11,"] [",$S12,"] [",$S13,"]<br>";

     	  $S21=$x21-$y21;
    	  $S22=$x22-$y22;
        $S23=$x23-$y23;
        echo"[",$S21,"] [",$S22,"] [",$S23,"]<br>";

        $S31=$x31-$y31;
        $S32=$x32-$y32;
        $S33=$x33-$y33;
        echo"[",$S31,"] [",$S32,"] [",$S33,"]<br>";
      break;

       case "*":
       echo"<br> La MULTIPLICACION de la matriz A con la matriz B es:<br>";

         echo"MATRIZ A <br>";
         echo"[",$x11,"] [",$x12,"] [",$x13,"]<br>";
         echo"[",$x21,"] [",$x22,"] [",$x23,"]<br>";
         echo"[",$x31,"] [",$x32,"] [",$x33,"]<br>";

         echo" <br> * <br>";

         echo"MATRIZ B <br>";
         echo"[",$y11,"] [",$y12,"] [",$y13,"]<br>";
         echo"[",$y21,"] [",$y22,"] [",$y23,"]<br>";
         echo"[",$y31,"] [",$y32,"] [",$y33,"]<br>";

         echo" <br> = <br>";

         $S11 = (($x11 * $y11) + ($x12 * $y21) + ($x13 * $y31)); 
	     	 $S12 = (($x11 * $y12) + ($x12 * $y22) + ($x13 * $y32)); 
	       $S13 = (($x11 * $y13) + ($x12 * $y23) + ($x13 * $y33)); 

		     $S21 = (($x21 * $y11) + ($x22 * $y21) + ($x23 * $y31)); 
		     $S22 = (($x21 * $y12) + ($x22 * $y22) + ($x23 * $y32));
         $S23 = (($x21 * $y13) + ($x22 * $y23) + ($x23 * $y33)); 

		     $S31 = (($x31 * $y11) + ($x32 * $y21) + ($x33 * $y31));  
         $S32 = (($x31 * $y12) + ($x32 * $y22) + ($x33 * $y32));
		     $S33 = (($x31 * $y13) + ($x32 * $y23) + ($x33 * $y33));

echo "El resultado de la multiplicacion de la matriz A y la matriz B es:<br><br>"."[",$S11,"]"."[",$S12,"]"."[",$S13,"]"."<br>"."[",$S21,"]"."[",$S22,"]"."[",$S23,"]"."<br>"."[",$S31,"]"."[",$S32,"]"."[",$S33,"]"; 


         
         break;
         
   }
}

  $resul_fu=calcular_matrices_A_B($MA11,$MA12,$MA13,$MA21,$MA22,$MA23,$MA31,$MA32,$MA33,$MB11,$MB12,$MB13,$MB21,$MB22,$MB23,$MB31,$MB32,$MB33,$op);

  echo" $resul_fu";

 ?>