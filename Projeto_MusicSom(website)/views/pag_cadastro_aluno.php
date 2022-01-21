<?php
  //pega o tipo de curso do aluno
  $curso = $_GET['curso'];

	if(isset($_GET['aviso'])){
		echo '<script type="text/javascript">';
		echo ' alert("Você precisa de um responsável se for menor de 18 anos")';  //not showing an alert box.
		echo '</script>';
	}
  		
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MusicSom Cadastro Aluno</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_cadaluno.css">
	<!-- Link do google fonts abaixo -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@400;500;600;700&family=Palanquin:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<a href="pag_home.php" id="logo-link">
		<div class="logo">
			<h2 class="logo-music">Music</h2> 
			<h2 class="logo-som">Som</h2>
			<img src="../public/images/guitarra.png" class="logo-guitarra">
		</div>
	</a>

	<div class="container-formulario">

		<div class="card">
			<h1>Atenção</h1>
			<p>Ao se Cadastrar Você Será Colocado em uma Fila de Espera</p>
			<img src="../public/images/relogio-icon.svg">
			<p>Quando Você Se Cadastrar na Music Som, Seu registro Não Será Adicionado Imediatamente, Portanto Espere o Retorno do Nossos Funcionários Para Informa-lo de Sua Aceitação ou Rejeição.</p>
		</div>

		<div class="formulario">
			<div class="form-header">
				<h1>Registre-se para a vaga</h1>
			</div>
			
			<form action="../routes/cadastro-aluno.php" method="POST">
				<input type="text" required name="input_nome" placeholder="Nome:">
			
				<input type="text" required name="input_sobrenome" placeholder="Sobrenome:">

				<input type="email" required name="input_email" placeholder="Email:">

				<input type="text" required name="input_tel" id="phone" placeholder="Telefone:">

				<div class="input-box" id="dt_nasc-box">
					<label>Dt. Nasc:</label>
					<input type="date" required name="input_dtnasc">
				</div>

				<input type="text" required name="input_cpf" id="cpf" placeholder="CPF:">
								
				<input type="text" required name="input_rg" id="rg" placeholder="RG:">

				<input type="text" required name="input_endereco" placeholder="Endereço:">

				<input type="text" required name="input_bairro" placeholder="Bairro:">

				<input type="text" required name="input_cidade" placeholder="Cidade:">

				<input type="text" required name="input_cep" id="cep" placeholder="CEP:">

				<input type="hidden" name="input_curso" value="<?php echo($curso)?>">

				<button type="submit" class="btn-submit">Enviar</button>
			</form>
			<p class="txt-aviso">Em caso de ser menor de 18 anos, <a class="btn-abri_respform" href="pag_cadastro_aluno-responsavel.php?curso=<?php echo $curso?>" >Clique aqui</a> para registrar o Responsável</p>
		</div>

	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
	<script>
		$("#phone").inputmask({"mask": "(99) 9 9999-9999"});
		$("#cpf").inputmask({"mask": "999999999 / 99"});
		$("#rg").inputmask({"mask": "99 . 999 . 999 - *"});
		$("#cep").inputmask({"mask": "99999 - 999"});
	</script>

</body>
</html>