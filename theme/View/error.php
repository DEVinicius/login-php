<?php 
    $this->layout("_theme", [
        "title" => $this->e($title)
    ]);
?>

<div class="error">
    <h1>Erro <?= $this->e($erro);?></h1>
    <button id="btn"><a href="<?= url()?>" title="Voltar">&larr; Voltar</a></button>
</div>