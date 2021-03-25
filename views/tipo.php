

<?php
	$variavel = 0;
	//print_r($livro);
	//print_r($livros);
	//print_r($_SESSION['genero']);
	//exit;
?>



<header>
	<div class="" id="titulo-pagina">
		<div id="titulo-pagina">
			<p>Biblioteca</p>
		</div>

		<div>
			<a href="<?php echo  BASE_URL;?>home">VOLTAR</a>
		</div>

		<div>
			<p>Bem-vindo <?php echo $_SESSION['usuario']?></p>
		</div>
		<div>
			<a href="<?php echo BASE_URL ?>login/sair">SAIR</a>
		</div>
	</div>
</header>

	
	

	<section class="container" id="section-livros">
		<div class="row">
			<div class="col-2">
				<nav>
					<ul>
						<?php foreach($genero as $g):?>
							<li><a href="<?php echo BASE_URL;?>tipo/?nome=<?php echo $g['nome_genero']?>"><?php echo $g['nome_genero']?></a></li>
						<?php endforeach;?>
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

