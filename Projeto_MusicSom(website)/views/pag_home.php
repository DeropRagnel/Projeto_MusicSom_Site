<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MusicSom Home</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<!-- Link do google fonts abaixo -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@400;500;600;700&family=Palanquin:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="header">
		<nav>
			<div class="logo">
				<h2 class="logo-music">Music</h2> 
				<h2 class="logo-som">Som</h2>
				<img src="../public/images/guitarra.png" class="logo-guitarra">
			</div>
			
			<button class="btn-inscrever" onclick="openForm()">Inscreva-se</button>
		</nav>
	</div>

	<div class="title">
		<p>Bem Vindo a <span class="title-music">Music</span> <span class="title-som">Som</span></p>
	</div>

	<div class="container">
		<div class="main-card">
			<h1>O que é Music Som</h1>
			<p>
			A Music Som é uma escola de música e loja de instrumentos musicais localizada na Avenida Capitão Francisco César em Barueri. Fundado por Gilberto Barbosa, o estabelecimento tem mais de 20 anos de experiência no mercado demonstrando uma alta competência em vender seus produtos e ensinar seus alunos. Com a Music Som você tem a possibilidade de aprender a tocar instrumentos como o Violão, a Bateria, Contrabaixo, Violino, Viola Caipira, entre outros. Junte-se a Music Som e se torne o melhor músico que você pode ser.
			</p>
		</div>
		<img src="../public/images/baterista.jpg" class="card-img">
	</div>

	<div class="inscricao">
		<h2>
			Buscando uma oportunidade de apreender ou ensinar
			<br>
			Na Melhor escola de Música da Região?
		</h2>
		<button onclick="openForm()"><h2>Registre-se agora</h2></button>
	</div>

	<div class="downloads">
		<div class="logo">
			<h2 class="logo-music">Music</h2> 
			<h2 class="logo-som">Som</h2>
			<img src="../public/images/guitarra.png" class="logo-guitarra">
		</div>

		<p>
			Agora que Você Conhece a Music Som, 
			<br>
			Baixe o Nosso Aplicativo e 
			<br>
			Venha Entender a Música com a Gente
		</p>

		<a href="tela_inscricao_aluno.html" class="btn-mobile">Download Android/IOS <img src="../public/images/smartphone.png"></a>
		<a href="tela_inscricao_aluno.html" class="btn-desktop">Download Desktop <img src="../public/images/desktop.png"></a>
	</div>

	<div id="overlay">
		<div class="container-popup">
			<button class="btn-close" onclick="closeForm()">X</button>
			<h1>O Que você busca ser?</h1>
			<div class="choice-wrapper">
				<a href="pag_cursos.php" id="Aluno">
					<h2>Aluno</h2>
					<img src="../public/images/undraw_students.svg">
				</a>
				<a href="pag_cadastro_funcionario.php" id="Professor">
					<h2>Professor</h2>
					<img src="../public/images/undraw_professor.svg">
				</a>
			</div>
		</div> 
	</div>

	<script>
		function openForm() {
		document.getElementById("overlay").style.display = "block";
		}

		function closeForm() {
		document.getElementById("overlay").style.display = "none";
		}
	</script>

	<div class="rodape">
		<div class="rodape-esquerda">
			<p>Music <span>Som</span></p>

			<ul class="itens-info">
				<li>
					<h2>Contatos</h2>
					<ul>
						<li>(11) 94733-5377</li>
						<li>(11) 94733-5377</li>
						<li>(11) 99116-8518</li>
					</ul>
				</li>

				<li>
					<h2>Endereço</h2>
					<ul>
						<li>Av Capitão Francisco César, 1216</li>
						<li>Vila Pindorama</li>
						<li>06415000 Barueri, SP</li>
					</ul>
				</li>

				<li>
					<h2>Horários</h2>
					<ul>
						<li>Abri: 09:00 A.M</li>
						<li>Fecha: 22:00 P.M</li>
					</ul>
				</li>
			</ul>
		</div>
		

		<div class="rodape-direita">
			<nav>
				<a href="https://play.google.com" class="playstore-logo"> 
					<img src="../public/images/playstore.png">
					<div class="playstore-text">
						<p>Disponível na</p>
						<h1>Play Store</h1>
					</div>
					
				</a>
				<h2>Entre em Contato</h2>
				<a href="whatsapp.com" class="btn-whatsapp"> <img src="../public/images/whatsapp.png"> </a>
				<a href="facebook.com" class="btn-facebook"> <img src="../public/images/facebook.png"> </a>
			</nav>			
		</div>
		
	</div>

</body>
</html>