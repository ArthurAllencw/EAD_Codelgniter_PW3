/*Validações do Login*/

$(function() {
        $('#login').submit(function() {
            var obj = this;
            var form = $(obj);
            var dados = new FormData(obj);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                processData: false,
                cache: false,
                contentType: false,
                success: function(data) {
                    if (data == "ErroUsuario") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de usuário ou email está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de senha está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroLogin") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao preencher campos',
                            text: 'Usuário ou senha inválidos!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "SucessoCliente") {

                        Swal.fire({
                            icon: 'success',
                            title: 'Login efetuado com sucesso!',
                            confirmButtonText: 'OK'
                        })
                    }
                }
            })
            return false;
        })
    }

);

/*Validações do Cadastro*/

$(function() {
        $('#cadastro').submit(function() {
            var obj = this;
            var form = $(obj);
            var dados = new FormData(obj);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                processData: false,
                cache: false,
                contentType: false,
                success: function(data) {
                    if (data == "ErroNome") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de nome está vazio!',
                            confirmButtonText: 'OK',
                        });
                    }
                    if (data == "ErroUserName") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de usuário está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroUsuarioExiste") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao preencher campos',
                            text: 'Esse usuário já está cadastrado!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCPF") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de CPF está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCpfExiste") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao preencher campos',
                            text: 'Esse CPF já está cadastrado!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroEmail") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de email está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroEmailExiste") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao preencher campos',
                            text: 'Este email já está cadastro!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de senha está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroConfSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo confirmação de senha está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenhaNaoConfere") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'As senhas não coincidem!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "Sucesso") {

                        Swal.fire({
                            icon: 'success',
                            title: 'Cadastro realizado com sucesso!',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                window.location.replace("TelaLogin");
                            }
                        })
                    }
                    if (data == "ErroCadastro") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao cadastrar usuário',
                            text: 'Não foi possível realizar o cadastro!',
                            confirmButtonText: 'OK'
                        });
                    }
                }
            })
            return false;
        })
    }

);

/*Validações do Cadastro Responsivo*/

$(function() {
        $('#cadastroResponsivo').submit(function() {
            var obj = this;
            var form = $(obj);
            var dados = new FormData(obj);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                processData: false,
                cache: false,
                contentType: false,
                success: function(data) {
                    if (data == "ErroNome") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de nome está vazio!',
                            confirmButtonText: 'OK',
                        });
                    }
                    if (data == "ErroUserName") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de usuário está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroUsuarioExiste") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao preencher campos',
                            text: 'Esse usuário já está cadastrado!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCPF") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de CPF está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCpfExiste") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao preencher campos',
                            text: 'Esse CPF já está cadastrado!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroEmail") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de email está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroEmailExiste") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao preencher campos',
                            text: 'Este email já está cadastro!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de senha está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroConfSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo confirmação de senha está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenhaNaoConfere") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'As senhas não coincidem!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "Sucesso") {

                        Swal.fire({
                            icon: 'success',
                            title: 'Cadastro realizado com sucesso!',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.value) {
                                window.location.replace("TelaLogin");
                            }
                        })
                    }
                    if (data == "ErroCadastro") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao cadastrar usuário',
                            text: 'Não foi possível realizar o cadastro!',
                            confirmButtonText: 'OK'
                        });
                    }
                }
            })
            return false;
        })
    }

);

/*Validações do Produto*/

$(function() {
        $('#produto').submit(function() {
            var obj = this;
            var form = $(obj);
            var dados = new FormData(obj);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                processData: false,
                cache: false,
                contentType: false,
                success: function(data) {
                    if (data == "ErroNome") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de nome está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCodBarras") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de código de barras está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSizeCodBarras") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O código de barras deve conter 13 dígitos!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCodBarrasExiste") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'Código de barras já cadastrado!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroDesc") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de descrição está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroPreco") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de preço está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroEstoque") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de estoque está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroBanco") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao cadastrar produto',
                            text: 'Não foi possível realizar o cadastro!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "SucessoProduto") {

                        Swal.fire({
                            icon: 'success',
                            title: 'Produto cadastrado com sucesso!',
                            confirmButtonText: 'OK'
                        });
                    }
                }
            })
            return false;
        })
    }

);

/*Validações do Cadastro do Adm*/

$(function() {
        $('#cadAdministrador').submit(function() {
            var obj = this;
            var form = $(obj);
            var dados = new FormData(obj);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                processData: false,
                cache: false,
                contentType: false,
                success: function(data) {
                    if (data == "ErroNome") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de nome está vazio!',
                            confirmButtonText: 'OK',
                        });
                    }
                    if (data == "ErroUsuario") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de Usuário está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroUsuarioExiste") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'Usuário já cadastrado!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCPF") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de CPF está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCpfExiste") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'CPF já cadastrado!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroEmail") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de email está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroEmailExiste") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'Email já cadastrado!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroTipo") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'Selecione um cargo!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de senha está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroConfirSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo confirmação de senha está vazio!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenhaNaoConfere") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'As senhas não coincidem!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroBanco") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao preencher campos',
                            text: 'Não foi possível realizar o cadastro!',
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "Sucesso") {

                        Swal.fire({
                            icon: 'success',
                            title: 'Cadastro realizado com sucesso!',
                            confirmButtonText: 'OK'
                        });
                    }
                }
            })
            return false;
        })
    }

);