<?php 
    $this->layout("_theme", [
        "title" => $this->e($title)
    ]);
?>

<h1>Login</h1>
<form action="#" method="post">
    <div id="email">
        <label for="email">E-mail</label>
        <input type="email" placeholder="E-mail" name="email" id="email_input">
    </div>

    <div id="password">
        <label for="password">Password</label>
        <input placeholder= "Password" type="password" name="password" id="password_input">
    </div>

    <input type="submit" id= "btn" class="send" value="Enviar">
    

    <div id="cadastro">
        <a href="<?= url("signUp")?>"></a>
    </div>
  
    <a href="<?= url("signUp")?>"  title="sign_up"><button id="btn">
        Cadastrar
    </button></a>
    
    
</form>