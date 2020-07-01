<?php 
    $this->layout("_theme", [
        "title" => $this->e($title)
    ]);
?>

<h1>
    Bem Vindo, <?= $_SESSION['name']?><br>Seu email é <?= $_SESSION['email']?>
</h1>
