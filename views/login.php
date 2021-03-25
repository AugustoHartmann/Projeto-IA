<section>
    <?php
    if(isset($_SESSION['id_usuario'])){
        header("Location :".BASE_URL);
    }

?>
    <div id="div-login">
    <div class="logging-div">
        <div id="titulo-pagina">
        <pre>
                </pre>
            <div id="titulo-pagina">
                
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
            </div>
        </div>
        <form method="POST" action="<?php echo BASE_URL?>login/logar" autocomplete="off">
            <div id="titulo-pagina">
                <h4>Acessar</h4>
            </div>
            <div id="login-input">
            <label for="usuario">Nome: </label>
                <input id="usuario" type="text" name="nome" autocomplete="off" required><br>
            </div>
            <div id="login-input">
            <label for="password">Senha: </label>
                <input id="password"type="password" name="senha" required><br>
            </div>
            <div id="login-input">
                <input type="submit" value="Entrar">
                
            </div>
            <a class="login-link" href="<?php echo  BASE_URL;?>registrar">Criar uma conta</a>
            <pre>
            </pre>
        </form>
</div>
    </div>
<script>
    function getOffset(el) {
          const rect = el.getBoundingClientRect();
          return {
            left: rect.left + window.scrollX,
            top: rect.top + window.scrollY
        };
    }
    console.log(getOffset('loggin-div').left);
</script>
</section>

