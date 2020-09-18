<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechOficial</title>
    <link href="<?php echo base_url('assets/css/bootstrap-padrao.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light Negrito">
        <a class="navbar-brand" href="<?php echo base_url("index.php/Home/index"); ?>">TechOficial</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navBar" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url("index.php/Home/TelaLogin"); ?>">LOGIN</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url("index.php/Home/TelaCadastro"); ?>">CADASTRO</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="mx-auto text-center mt-5">
        <h1 class="display-3">SEJA BEM-VINDO AO NOSSO SITE!</h1>
    </div>

    <div class="mx-auto text-center mt-5">
        <h1 class="display-4">FAÇA LOGIN OU CADASTRE-SE</h1>
    </div>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>

</body>

</html>