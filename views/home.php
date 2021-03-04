

<?php
	$variavel = 0;
	//print_r($livro);

?>



<header>
	<div class="" id="titulo-pagina">
		<div id="titulo-pagina">
			<p>Biblioteca</p>
		</div>

		<div></div>
	</div>
</header>


	

	<section class="container" id="section-livros">
		<div class="row">
			<div class="col-2">
				<nav>
					<ul>
						<?php foreach($genero as $g):?>
							<li><a href="<?php echo BASE_URL;?>tipo/?nome=<?php echo $g['nome']?>"><?php echo $g['nome']?></a></li>
						<?php endforeach;?>
					</ul>	
				</nav>
			</div>

			<div class="col-10">

				<div id="livros">

					
					<div id="div-livros">
						<?php foreach($livro as $l):?>
								
								<div id="livro">
								
									<div id="div-imagem">
										<a href="<?php echo BASE_URL?>livro/?id=<?php echo $l['id_livro']?>">
											<img src="<?php echo BASE_URL; ?>assets/images/<?php echo $l['foto']?>" alt="">
										</a>
									</div>
								
									<div>
										<div>
											<p>Título do livro</p>
										</div>
										<div>
											<div>Gênero</div>
										</div>
										<div>
											<p>
												
											</p>
										</div>
									</div>
								
								</div>
								
								<?php
									$variavel = $variavel + 1;	
									if($variavel == 3) {
										$variavel = 0;
										echo "</div><div id='div-livros'>";
									}
								?>
							
						<?php endforeach;?>
					</div>
					
				</div>

			</div>
		</div>
	</section>

