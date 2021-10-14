<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Formulário de Inscrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width-device-width, initial-scale-1">
</head>
<body>

	<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

	<form action="script.php" method="post">
		<?php 
			$mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : ''; // se não devolver a resposta ela fica vazia por isso: '' as aspas.
			if(!empty($mensagemDeSucesso))  
			{
				echo $mensagemDeSucesso;
			} 


			$mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
			if(!empty($mensagemDeErro))  
			{
				echo $mensagemDeErro;
			}  //Atribuindo um valor para nova variavel mensagemDeErro, se o que estive na array for vdd. -- ? $_SESSION['mensagem-de-erro'] Acessa a array | o "?" faz a função do if(se), se a mensagemDeErro for vdd,!empty, se a mensagem de erro não estiver vazia.
		?>
		<p>Seu nome: <input type="text" name="nome" /></p>
		<p>Sua idade: <input type="text" name="idade" /></p>
		<p><input type="submit"  value="Enviar dados do competidor" /></p>
	</form>

</body>
</html>