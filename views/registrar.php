<section>
<pre>

</pre>
    <div id="div-registrar">
    <div class="logging-div">
        <form method="POST" action="<?php echo BASE_URL;?>registrar/criar">
        <pre></pre>
            <h3>Crie sua conta</h3>
            <pre>
            </pre>
            <div class="registrar-input">
            <label class="left" for="usuario">Nome</label>
            <div class="right">
                <input class="right" id="usuario" name='nome' type="text" required>
            </div>
            </div>
            <div class="registrar-input">
            <div class="right">
            <label class="left" for="senha1">Senha</label>
                <input class="right" id="senha1" name="pass1" type="password" required>
            </div>
            </div>
            <div class="registrar-input">
            <div class="right">
            <label class="left" for="senha2">Confirmar senha</label>
                <input class="right" id="senha2" name="senha" type="password" required>
            </div>
            </div>
            <pre>
            </pre>
            <div class="registrar-input">
                <input type="submit" value="Registrar" id="submit_btn" disabled>
            </div>
            <div>
			    <a class="login-link" href="<?php echo BASE_URL ?>login">Já tenho uma conta</a>
		    </div>
            <pre>
            </pre>
        </form>
        </div>
    </div>
<script>
    var senha1 = document.getElementById("senha1");
    var senha2 = document.getElementById("senha2");
    var submit_button = document.getElementById("submit_btn");
    function verifica_senhas(){
        if(senha1.value != "" && senha2.value != ""){
        if(senha1.value == senha2.value){
            submit_button.disabled = false;
        }
        else{
            submit_button.disabled = true;
        }
    }
}
    setInterval(verifica_senhas, 300);  
    
</script>
</section>
