<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <div class="mt-5 d-none d-md-block">
        <div class="caixaLogin mx-auto my-auto">
            <h2 class="text-white text-center titulo">Login</h2>
            <form action="<?php echo base_url("index.php/Login/validarLogin"); ?>" method="POST" id="login">
                <div class="mt-4 ">
                    <div class="form-group mx-auto col-10">
                        <label for="user" class="text-white">Usuário ou E-mail</label>
                        <input type="text" class="form-control" id="user" name="user"
                        value="<?php
                            if(isset($this->session->email))
                            {
                                echo $this->session->email;
                            }
                            if(isset($this->session->email))
                            {
                                $this->session->session_destroy;
                            }          
                            ?>">
                    </div>
                    <div class="form-group mx-auto col-10">
                        <label for="pass" class="text-white">Senha</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-lg btn-danger text-white">Entrar</button>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="text-white">Esqueci minha senha</a>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <link href="<?php echo base_url('assets/node_modules/@sweetalert2/theme-dark/dark.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>

</body>

</html>