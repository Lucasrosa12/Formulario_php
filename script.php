<?php

session_start();

$categorias = [];
$categorias[] = 'Infantil';               //Array numerico
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
#print_r($categorias);           Printa na telas as informações que estão dentro array

$nome = $_POST['nome'];                 //$nome = $_GET['nome'];              MUDAR TAMBÉM NO HTML
$idade = $_POST['idade'];               //$idade = $_GET['idade'];
//var_dump($nome, $idade);
//return 0;  serve para n executar o codigo de baico
if (empty($nome)) {
	$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preecha-o novamente';     //Array Associativo de sessão'mensagem de erro'(Associar um valor a uma chave.
	header('location: index.php');
	return;
}

else if (strlen($nome) < 3) {
	$_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de 3 caracteres';
	header('location: index.php'); // retorna para o index que é o furmulario.
	return;
}

else if (strlen($nome) > 40) {
	$_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres!';
	header('location: index.php');
	return;
}

else if (!is_numeric($idade)) {  //SE ele NÂO for um numero.
	$_SESSION['mensagem-de-erro'] = 'Informe um numero para idade';
	header('location: index.php');
	return;
}
/*
if (strlen($idade) > 2) {
	$_SESSION['mensagem-de-erro'] = 'Infomar a idade apenas com 2 numeros!';
	header('location index.php');
	return;
}
*/

if ($idade >= 6 && $idade <= 12) {

	for ($i = 0; $i <= count($categorias); $i++) //count/contar enquanto for menor que um determido valor.
	 {         
		if ($categorias[$i] == 'Infantil') 
			{
				$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
				header("location: index.php");
				return;
			}
	}
}
elseif ($idade >= 13 && $idade <= 18) {

	for ($i = 0; $i <= count($categorias); $i++) 
	 {         
		if ($categorias[$i] == 'Adolescente') 
			//echo "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
			{
				$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
				header("location: index.php");
				return;
			}
	}
}
elseif ($idade >=19){            #Modidificação, add mais um elseif para melhor a resposta do formulario.
    
    for ($i = 0; $i <= count($categorias); $i++) //count/contar enquanto for menor que um determido valor.
	 {         
		if ($categorias[$i] == 'Adulto') 
			//echo "O nadador ".$nome. " Compete na categoria ".$categorias[$i];   
			{
				$_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
				header("location: index.php");
				return;
			}              
	}
}

else 
	echo "Informe uma Idade valida";                                         #alteração própria, impedir que o usuario digita uma idade menor que 6.
	return;

?>