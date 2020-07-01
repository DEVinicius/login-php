<?php 
    $this->layout("_theme", [
        "title" => $this->e($title)
    ]);
?>

<form action="<?= url("login") ?>" method="post">
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
        <a href="<?= url("signUp")?>">Cadastrar</a>
    </div> 
    
    <?php 
        if(!$this->e($warning) == null):
    ?>
        <h4><?= $this->e($warning) ?></h4>
    <?php 
        endif
    ?> 
</form>