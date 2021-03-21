

<header>

    

</header>

<section>

    <div id="div-login">
        <div id="titulo-pagina">
            <div id="titulo-pagina">
                <h2>Bem vindo a Biblioteca Online!</h2>
            </div>
        </div>
        <form method="POST" action="<?php echo BASE_URL?>login/logar">
            <div id="titulo-pagina">
                <h4>Acessar</h4>
            </div>
            <div id="login-input">
                Nome: <input type="text" name="nome"><br>
            </div>
            <div id="login-input">
                Senha: <input type="text" name="senha"><br>
            </div>
            <div id="login-input">
                <input type="submit" value="Logar">
                <a href="<?php echo  BASE_URL;?>registrar">Criar uma conta</a>
            </div>
        </form>
    
    </div>

</section>

