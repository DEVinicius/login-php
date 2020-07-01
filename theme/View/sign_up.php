<?php 
    $this->layout("_theme", [
        "title" => $this->e($title)
    ]);
?>

<form action="<?= url("/signUp")?>" method="post">
    <div id="name">
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>

    <div id="email">
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>

    <div id="password">
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>

    <input type="submit" id= "btn_sign_up" class="send" value="Cadastrar">
</form>