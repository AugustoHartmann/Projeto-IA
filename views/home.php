

<?php
$variavel = 0;
//print_r($livro);
?>


<header>
	
</header>

<pre>
		<?php
		//print_r($_COOKIE['genero']);				
		//print_r($_SESSION['genero']);
		?>
	</pre>


<section class="container" id="section-livros">
	<div class="row" id="titulo-pagina">
		<div id="titulo-principal">
			<h3>Biblioteca Online</h3>
		</div>

		<div id="titulo-pagina-voltar">
			<a id="voltar" href="<?php echo  BASE_URL; ?>home">VOLTAR</a>
		</div>

		
		<div id="titulo-pagina-zerar">
			<a href="<?php echo BASE_URL ?>home/zerar">ZERAR</a>
		</div>
		

		<div id="titulo-pagina-logout">
			<a id="logout" href="<?php echo BASE_URL ?>login/sair">LOGOUT</a>
		</div>

		<div id="titulo-pagina-bem-vindo">
			<h5>Bem-vindo <b><?php echo $_SESSION['usuario']?></b></h5>
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<nav>
				<ul>
					<?php foreach ($genero as $g) : ?>
						<li><a href="<?php echo BASE_URL; ?>tipo/?nome=<?php echo $g['nome_genero'] ?>"><?php echo $g['nome_genero'] ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</div>

		<div class="col-10">

			<div id="livros">


				<div id="div-livros">
					<?php foreach ($livro as $l) : ?>
						<div id="livro">
								
								<div id="div-imagem">
									<a href="<?php echo BASE_URL ?>livro/?id=<?php echo $l['id_livro'] ?>">
										<img class="capa" src="data:image/png;base64,<?php echo $l['foto'] ?>" alt="">
									</a>
									</div>
								
									<div>
										<div>
											<p><?php echo $l['nome_livro'] ?></p>
										</div>
										<div>
											<div><?php echo $l['nome_genero'] ?></div>
										</div>
										<div>
											<p>
												
											</p>
										</div>
									</div>
								
								</div>

						<?php
						$variavel = $variavel + 1;
						if ($variavel == 3) {
							$variavel = 0;
							echo "</div><div id='div-livros'>";
						}
						?>

					<?php endforeach; ?>
				</div>

			</div>

		</div>
	</div>
</section>