<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="<?php echo base_url('assets/css/bootstrap-padrao.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00", {reverse: false})
        });
    </script>
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
                    <a class="nav-link" href="#">CADASTRO</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-none d-md-block">
        <div class="caixaCadastro mx-auto mt-5 text-white font-weight-bold">
            <h2 class="text-center titulo">Cadastro</h2>

            <form action="<?php echo base_url("index.php/Cadastro/validarCadastro"); ?>" method="POST" id="cadastro" class="form-row mt-5">
                <div class="form-group mx-auto col-5">
                    <label for="nome">Nome</label>
                    <input type=" text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="userName" class="">Nome de Usuário</label>
                    <input type="text" class="form-control" id="userName" name="userName">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="ConfPass">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confSenha" name="confSenha">
                </div>
                <div class="text-center mx-auto mt-4">
                    <button type="submit" class="btn btn-danger btn-lg">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaCadastroP mt-4 text-white">
            <h2 class="text-center titulo">Cadastro</h2>
            <form class="form-row mt-2">
                <div class="form-group mx-auto col-12">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="pass">Senha</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="tel">Telefone</label>
                    <input type="text" class="form-control" id="tel" name="tel">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="ConfPass">Confirmar Senha</label>
                    <input type="password" class="form-control" id="ConfPass" name="ConfPass">
                </div>
                <button type="submit" class="btn btn-lg mt-3 btn-danger rounded mx-auto d-block">Cadastrar</button>
            </form>
        </div>
    </div>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <link href="<?php echo base_url('assets/node_modules/@sweetalert2/theme-dark/dark.css'); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>

</body>

</html>