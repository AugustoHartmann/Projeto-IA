<?php
$variavel = 0;
//print_r($livro);
?>


<header>

</header>



<?php
$nome = "";
if (isset($_SESSION['usuario'])) {
	$nome = $_SESSION['usuario'];
} else {
	$nome = "";
}

if(!isset($_SESSION['usuario'])){
	header("Location: " .BASE_URL);
}

?>
<div class="row" id="titulo-pagina">
<nav class="navbar navbar-light navbar-expand-md bg-dark navigation-clean">
        <div class="container-fluid">
		<a class="navbar-brand text-white-50" href="<?php echo BASE_URL ?>home">
			<i class="icon ion-ios-"> <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></i>&nbsp;
		</a>
		<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
			<span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
		</button>
        <div
                class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
		<div>
			<a class="btn btn-danger" href="<?php echo BASE_URL ?>login/sair">SAIR</a>
		</div>
		<div>
			<a class="btn btn-primary" href="<?php echo BASE_URL?>home/zerar">ZERAR</a>
		</div>
    </nav>
<pre>
		<?php
		//print_r($_COOKIE['genero']);				
		//print_r($_SESSION['genero']);
		?>
</pre>
</div>

<section class="container" id="section-livros">
	<div id="titulo-principal">
		<h3>Biblioteca Online</h3>
	</div>
	<div id="titulo-pagina-bem-vindo">
		<h5>Bem-vindo <b><?php echo $nome ?></b></h5>
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