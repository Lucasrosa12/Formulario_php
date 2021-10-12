<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
#print_r($categorias);           Printa na telas as informações que estão dentro array

$nome = 'Lucas';
$idade = 8;
#var_dump($nome, $idade);

if ($idade >= 6 && $idade <= 12) {

	for ($i = 0; $i <= count($categorias); $i++) //count/contar enquanto for menor que um determido valor
	 {         
		if ($categorias[$i] == 'Infantil') 
			echo "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
	}
}
elseif ($idade >= 13 && $idade <= 18) {

	for ($i = 0; $i <= count($categorias); $i++) 
	 {         
		if ($categorias[$i] == 'Adolescente') 
			echo "O nadador ".$nome. " Compete na categoria Adolescente";
	}
}
else{
    
    for ($i = 0; $i <= count($categorias); $i++) //count/contar enquanto for menor que um determido valor
	 {         
		if ($categorias[$i] == 'Adulto') 
			echo "O nadador ".$nome. " Compete na categoria Adulto";
	}
}
?>