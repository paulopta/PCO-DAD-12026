<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAD - PCO</title>
    <link rel="stylesheet" href="assets/css/style.css"  > 
</head>
<body>
    <h5>Delimitação do Código</h5>
	<code>
 < ?php ?> (sem espaço entre as tags)
	</code>
	
	<h5>Exibição de Mensagem</h5>
	<code>
		echo "Olá, mundo!";		
	</code>
	
	<h5>Variáveis</h5>
	<code>
		<?php 
			$nome = "Maria";
			$idade = 25;
			$altura = 1.68;
			$status = true;
			
			echo "O nome é $nome, a idade é $idade, 
			a altura é $altura e o status é $status  ";
		?>
	</code>
		
	<h5>Operadores</h5>
	<code>
		<?php 
			$a = 10;
			$b = 15;
			$soma = $a + $b;
			$subtracao = $a - $b;
			$divisao = $a / $b;
			$multiplicacao = $a * $b;
			
			echo "A soma é $soma <br/> A subtração é $subatracao <br/> A divisão é $divisao <br/> A multiplicação é $multiplicacao ";
		?>
	</code>
	<br/>
	
	<h5>Estruturas de Controle</h5>
	<code>
		<?php 
			$a = 10;
			$b = 15;
			if($a>$b){
				echo "A é maior que B";
			}else{
				echo "B é maior que B";
			}
				
			echo "<br/><br/>";
			
			$cor = "azul";
			switch($cor){
				
				case "azul":
					echo "A cor é azul";
					break;
				
				case "vermelho":
					echo "A cor é vermelho";
					break;
				
				default:
					echo "Nenhuma cor selecionada";
					break;
				
			}	
		?>
	</code>
	<br/>
	
	
	<h5>Arrays</h5>
	<code>
		<?php 
			$frutas = ["Maçã","Banana","Laranja"];
			foreach($frutas as $fruta){
				echo $fruta."<br/>";
			}
		?>
	</code>
	<br/>
	
	<h5>Funções</h5>
	<code>
		<?php 
			function soma($a, $b){
				return $a + $b;
			}
			
			echo " A soma de 1 + 2 é ".soma(1,2);
		?>
	</code>
	<br/>
	
	<h5>String</h5>
	<code>
		<?php 
			$texto = "DAD é uma matéria legal!";
			echo "<br/>".strlen($texto);
			echo "<br/>".strtolower($texto);
			echo "<br/>".strtoupper($texto);
			echo "<br/>".str_replace("DAD","DAM",$texto);
		?>
	</code>
	<br/>
	
	
</body>
</html>