

<header>

    <div class="" id="titulo-pagina">
		<div id="titulo-pagina">
			<p>Login</p>
		</div>

		<div>
			<a href="<?php echo  BASE_URL;?>registrar">Registrar</a>
		</div>
	</div>

</header>

<section>

    <div id="div-login">
        <form method="POST" action="<?php echo BASE_URL?>login/logar">

            <div id="login-input">
                Nome: <input type="text" name="nome"><br>
            </div>
            <div id="login-input">
                Senha: <input type="text" name="senha"><br>
            </div>
            <div id="login-input">
                <input type="submit" value="Logar">
            </div>
        </form>
    
    </div>

</section>

