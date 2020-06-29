<?php 
    $this->layout("_theme", [
        "title" => $this->e($title)
    ]);
?>

<h1>Erro <?= $this->e($erro);?></h1>
<button><a href="<?= url()?>" title="Voltar">&larr;</a></button>