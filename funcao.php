
<?php 
	
	function Soma($n1, $n2){
		$soma;
		$soma += $n1+$n2;
		return $soma;
	}

	$a1=10;
	$a2=10;
	$resultado=Soma($a1,$a2);
	echo $resultado ;
?>

</br>

<?php 
	function SomaArray($array){
		
		for ($i=0; $i < sizeof($array) ; $i++) { 
			$somaDoArray += $array[$i];
		}
			return $somaDoArray; 
		
	}

	$numeros = array(12,13,);

	$totalDoArray = SomaArray($numeros);
	echo $totalDoArray ;

?>