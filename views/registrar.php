<header>
	<div class="" id="titulo-pagina">
		<div id="titulo-pagina">
			<p>Biblioteca</p>
		</div>

		

		<div>
			<a href="<?php echo BASE_URL ?>login">Página de login</a>
		</div>
	</div>
</header>


<section>

    <div id="div-registrar">
        <form method="POST" action="<?php echo BASE_URL;?>registrar/criar">

            <div id="registrar-input">
                Nome: <input name='nome' type="text">
            </div>
            <div id="registrar-input">
                Senha: <input name="senha" type="text">
            </div>
            <div id="registrar-input">
                <input type="submit" value="Registrar">
            </div>
            

        </form>

    </div>

</section>
