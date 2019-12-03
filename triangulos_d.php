<form>
	Lado 1    
	<input name="lado1"/>
	</br>
	Lado 2    
	<input name="lado2"/>
	</br>
	Lado 3  
	<input name="lado3"/>
	</br>
	</br>
	</br>
	<button>Comprobar</button>
	</br>
	</br>
	<button href="http://localhost/asir2_kimberly/triangulos_c.php">Resetear valores.</button>
	</br>
	</br>
</form>

<?php
		if(($_GET['lado1'])>0 && ($_GET['lado2'])>0 && ($_GET['lado3'])>0 ){
			function trian($info){
				$vec=null;
				$lados=null;	
				$angulos=null;
				$l1=$info[L][0];
				$l2=$info[L][1];
				$l3=$info[L][2];

				$x=(($l1^2-$l2^2+$l3^2)/(2*$l3));
				$h=(sqrt($l1^2-$x^2));
				$a1=(atan($h/($l3-$x)));
				$a2=(atan($h/$x));
				$a3=(180-($a1+$a2));


				if($l1==$l2 && $l1==$l3){
					$lados='El Triángulo es  equilátero';
				}elseif($l1==$l2 || $l1==$l3 || $l2==$l3){
					$lados='El Triángulo es isósceles';
				}else
					$lados='El Triángulo es escaleno';
				

				if($a1==90 || $a2==90 || $a3==90){
					$angulos=' y rectángulo.';
				}elseif($a1<90 && $a2<90 && $a3<90){
					$angulos=' y acutángulo.';
				}else
					$angulos=' y obtusángulo.';

				
				$vec.=$a1;
				$vec.=$a2;
				$vec.=$a3;
				$vec.=$lados;	
				$vec.=$angulos;

				return $vec;
			}
		echo trian(['L'=>[$_GET['lado1'],$_GET['lado2'],$_GET['lado3']]);
		}else
			echo 'Mete números positivos, por favor.';
?>