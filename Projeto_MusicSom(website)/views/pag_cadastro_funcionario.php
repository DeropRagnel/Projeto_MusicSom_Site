<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MusicSom Cadastro Professor</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style_cadfuncio.css">
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
		<div class="formulario">
			<div class="form-header">
				<h1>Registre-se para a vaga</h1>
			</div>
			
			<form action="../routes/cadastro-funcionario.php" method="POST" enctype="multipart/form-data">
				<input type="text" required name="input_nome" placeholder="Nome:">
			
				<input type="text" required name="input_sobrenome" placeholder="Sobrenome:">

				<input type="email" required name="input_email" placeholder="Email:">

				<input type="text" required name="input_telefone" id="phone" placeholder="Telefone:">

				<div class="input-box" id="dt_nasc-box">
					<label>Dt. Nasc:</label>
					<input type="date" required name="input_dtnasc">
				</div>

				<input type="text" required name="input_cpf" id="cpf" placeholder="CPF:">

				<input type="text" required name="input_rg" id="rg" placeholder="RG:">

				<select required name="input_estdcivil">
					<option value="">Estado Civil:</option>
					<option value="Solteiro">Solteiro</option>
					<option value="Casado">Casado</option>
					<option value="Divorciado">Divorciado</option>
					<option value="Viúvo">Viúvo</option>
				</select>

				<input type="text" required name="input_endereco" placeholder="Endereço:">

				<input type="text" required name="input_bairro" placeholder="Bairro:">

				<input type="text" required name="input_cidade" placeholder="Cidade:">

				<input type="text" required name="input_cep" id="cep" placeholder="CEP:">

				<div id="upload-box">
				<label>Anexe seu Curriculo:</label>
				<input type="file" id="input_curriculo" required name="input_curriculo"/>
				</div>

				<button type="submit" class="btn-submit">Enviar</button>
			</form>
		</div>
		

		<div class="card">
			<h1>Aguarde após o envio</h1>
			<p>Entraremos em contato assim que possível</p>
			<img src="../public/images/undraw_resume.svg">
			<h2>Fique atento à nossa resposta</h1>
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