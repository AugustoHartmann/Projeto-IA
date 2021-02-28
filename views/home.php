<pre>

<?php

	//print_r($livros);
	//exit;
?>

</pre>

<header>
	<div class="" id="titulo-pagina">
		<div id="titulo-pagina">
			<p>Biblioteca</p>
		</div>

		<div></div>
	</div>
</header>

<body>
	

	<div class="container">
		<div class="row">
			<div class="col-2">
				<nav>
					<ul>

						<?php foreach($livros as $l):?>

							<li><a href=""><?php echo $l['nome']?></a></li>
							
						<?php endforeach;?>
					</ul>	
				</nav>
			</div>

			<div class="col-10">
				<div id="livros">
					<div id="colecao-livros">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>