

<?php
	$variavel = 0;
	
    //print_r($livro);
?>



    <nav class="navbar navbar-light navbar-expand-md bg-dark navigation-clean">
        <div class="container-fluid"><a class="navbar-brand text-white-50" href="<?php echo BASE_URL ?>home"><i class="icon ion-android-arrow-back"></i>&nbsp;Voltar</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
		<div>
		<a href="<?php echo BASE_URL ?>login/sair">LOGOUT</a>
		</div>
		<div>
			<a href="<?php echo BASE_URL?>home/zerar">ZERAR</a>
		</div>
    </nav>

	<pre>
		<?php
							
			print_r($_SESSION['genero']);
		?>
	</pre>
	

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
						<?php foreach($livro as $l):?>
							<?php foreach($l as $l2):?>
								<div id="livro">
								
									<div id="div-imagem">
										<a href="<?php echo BASE_URL?>livro/?id=<?php echo $l2['id_livro']?>">
											<img src="data:image/png;base64,<?php echo $l2['foto']?>" alt="">
										</a>
									</div>
								
									<div>
										<div>
                                            <?php
                                                print_r($l2['nome_livro'])
                                            ?>
										</div>
										<div>
											<div></div>
										</div>
										<div>
                                            <p><?php echo $l2['nome_genero'] ?></p>
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
						<?php endforeach;?>
					</div>
					
				</div>

			</div>
		</div>
	</section>

