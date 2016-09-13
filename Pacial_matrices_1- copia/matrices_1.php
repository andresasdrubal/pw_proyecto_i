<?php 

$m_00=$_POST['m_00'];
  $ma_00=(int)$m_00;

$m_01=$_POST['m_01'];
$ma_01=(int)$m_01;

$m_02=$_POST['m_02'];
$ma_02=(int)$m_02;

$m_10=$_POST['m_10'];
  $ma_10=(int)$m_10;

$m_11=$_POST['m_11'];
  $ma_11=(int)$m_11;

$m_12=$_POST['m_12'];
$ma_12=(int)$m_12;

$m_20=$_POST['m_20'];
 $ma_20=(int)$m_20;  

$m_21=$_POST['m_21'];
$ma_21=(int)$m_21;

$m_22=$_POST['m_22'];
 $ma_22=(int)$m_22; 

$multi=$_POST['multi'];
    $n=(int)$multi;

$potencia=$_POST['potencia'];
    $pot=(int)$potencia;


$opr =$_POST['opr'];


function calculadora_de_matrices($a00,$a01,$a02,$a10,$a11,$a12,$a20,$a21,$a22,$n1,$p,$oper) {

  switch ($oper) {

	case "determinante":

	//editando funcion para calcular las determinantes
		$total=0;

		
    echo"MATRIZ A<br>";
               echo"[",$a00,"] [",$a01,"] [",$a02,"]<br>";
               echo"[",$a10,"] [",$a11,"] [",$a12,"]<br>";
               echo"[",$a20,"] [",$a21,"] [",$a22,"]<br><br>";

    $total_1=$a00*$a11*$a22 + $a10*$a21*$a02 +$a20*$a01*$a12;
    $total=$total_1+($a02*$a11*$a20)*-1 + ($a12*$a21*$a00)*-1 + ($a22*$a01*$a10)*-1;

   echo " el determinante de la matriz A es: ",$total;

        break;

    case "inversa":
          

           $total_1=$a00*$a11*$a22 + $a10*$a21*$a02 +$a20*$a01*$a12;
            $total=$total_1+($a02*$a11*$a20)*-1 + ($a12*$a21*$a00)*-1 + ($a22*$a01*$a10)*-1;
 
    	
  		if($total!=0){
			$num1=$a11*$a22-$a21*$a12;


     		echo "Resultado matriz inversa 3x3 <br>";

     		echo "[ ",$num1/$total,"]   [",((($a01*$a22-$a21*$a02)*-1)/$total),"]    [",(($a01*$a12-$a11*$a02)/$total);

     		echo "]<br></br>";

     		echo "[",((($a10*$a22-$a20*$a12)*-1)/$total),"]   [",((($a00*$a22-$a20*$a02))/$total),"]   [",((($a00*$a12-$a10*$a02)*-1)/$total);

  		echo "]<br></br>";

  		echo "[",((($a10*$a21-$a20*$a11))/$total),"]    [",((($a00*$a21-$a20*$a01)*-1)/$total),"]    [",(($a00*$a11-$a10*$a01)/$total),"]<br>";    
		}
		else
		{
		echo "Error el det. da 0 ";  
    		}
    break;

    case  "transpuesta":

           
               echo"MATRIZ A<br>";
               echo"[",$a00,"] [",$a01,"] [",$a02,"]<br>";
               echo"[",$a10,"] [",$a11,"] [",$a12,"]<br>";
               echo"[",$a20,"] [",$a21,"] [",$a22,"]<br><br>";
              
               echo"T= <br>";
              
               echo"[",$a00,"] [",$a10,"] [",$a20,"]<br>";
               echo"[",$a01,"] [",$a11,"] [",$a21,"]<br>";
               echo"[",$a02,"] [",$a12,"] [",$a22,"]<br>";
       break;

    case "multiplicar":
    
       

   	echo"MATRIZ A<br>";
               echo"[",$a00,"] [",$a01,"] [",$a02,"]<br>";
               echo"[",$a10,"] [",$a11,"] [",$a12,"]<br>";
               echo"[",$a20,"] [",$a21,"] [",$a22,"]<br><br>";
              

    echo" MATRIZ A multiplicada por * $n1 =<br>";
               echo"[",$n1*$a00,"] [",$n1*$a01,"] [",$n1*$a02,"]<br>";
               echo"[",$n1*$a10,"] [",$n1*$a11,"] [",$n1*$a12,"]<br>";
               echo"[",$n1*$a20,"] [",$n1*$a21,"] [",$n1*$a22,"]<br><br>";
              
       	break;

    case "potenciar":
    
       

   	echo"MATRIZ A<br>";
               echo"[",$a00,"] [",$a01,"] [",$a02,"]<br>";
               echo"[",$a10,"] [",$a11,"] [",$a12,"]<br>";
               echo"[",$a20,"] [",$a21,"] [",$a22,"]<br><br>";
              

    echo" MATRIZ A elevada a ^ $p =<br>";

             $v00=$a00**$p; $v01=$a01**$p; $v02=$a02**$p;
             $v10=$a10**$p; $v11=$a11**$p; $v12=$a12**$p;
             $v20=$a20**$p; $v21=$a21**$p; $v22=$a22**$p;

               echo"[",$v00,"] [",$v01,"] [",$v02,"]<br>";

               echo"[",$v10,"] [",$v11,"] [",$v12,"]<br>";

               echo"[",$v20,"] [",$v21,"] [",$v22,"]<br><br>";
              
       	break;

    }
}


  $r=calculadora_de_matrices($ma_00,$ma_01,$ma_02,$ma_10,$ma_11,$ma_12,$ma_20,$ma_21,$ma_22,$n,$pot,$opr );

     echo "$r";




 ?>