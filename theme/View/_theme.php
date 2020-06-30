<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= url("/theme/css/_theme.css")?>">
        <link rel="stylesheet" href="<?= url("/theme/css/_form.css")?>">
        <title><?= $this->e($title)?></title>
    </head>
    <body>
        <div class="main_title">
            <a href="<?= url();?>"><h1>Login Treinamento</h1></a>
        </div>

        <div class="form">
            <?= $this->section("content") ?>
        </div>

        <footer class="main_footer">
            <?php echo SITE;?> | Todos os direitos reservados
        </footer>
    </body>
</html>