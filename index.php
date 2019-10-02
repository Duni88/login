<!doctype html>
<html lang="pt-br">
<!--
        Para acessar o projeto, habilite o apache no XAMPP 
        abra a URL http://localhost/login/
        -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sistema de login</title>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <style>
        #alerta,
        #caixaSenha,
        #caixaRegistro {
            display: none;
        }
    </style>
</head>

<body class="bg-dark">
    <main class="container mt-4">
        <section class="row">
            <div class="col-lg-4 offset-lg-4" id="alerta">
                <div class="alert alert-success text-center">
                    <strong class="resultaddo">
                        Alo Ha Tchurmaaaaaaaaaaa !
                    </strong>
                </div>
            </div>
        </section>
        <!-- formulario de login -->
        <section class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
                <h2 class="text-center mt-2">
                    Entrar no Sistema
                </h2>
                <form action="#" method="post" class="p-2" id="formlogin"></form>
                <div class="form-group">
                    <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de Usuario" class="form-control" required minlength="5">
                </div>

                <div class="form-group">
                    <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Senha" class="form-control" required minlength="6">
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="lembrar" id="lembrar" class="custon-control-input">
                        <label for="lembrar" class="custon-control-label">
                            Lembrar de mim.
                        </label>

                        <a href="#" class="float-right" id="btnEsqueci">
                            Esqueci a senha!
                        </a>
                    </div>

                </div>

                <div class="form-group">
                    <input type="submit" value="::Entrar::" name="btnEntrar" id="btnEntrar" class="btn btn-primary btn-block">
                </div>
                <div class="form-group">
                    <p>
                        Novo usuario? <a href="#" id="btnRegistrarNovo">
                            Registre-se aqui!
                        </a>
                    </p>
                </div>
                </form>
            </div>
        </section>
        <!-- Final da sessao de Login -->
        <br>
        <!-- Formulario de recuperaçao de senha -->
        <section class="row mt-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaSenha">
                <h2 class="text-center mt-2">
                    Gerar Nova Senha
                </h2>
                <form action="#" method="post" id="formSenha" class="p-2">
                    <div class="form-group">
                        <small class="text-muted">
                            Para gerar nova senha, digite o seu e-mail.
                            Clique no link gerado.
                        </small>
                    </div>

                    <div class="form-group">
                        <input type="email" name="emailGerarSenha" id="emailGerarSenha" class="form-control" placeholder="E-mail de recuperaçao de senha" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="::Gerar::" name="btnGerar" id="btnGerar" class="btn btn-primary btn-block">
                    </div>

                    <div class="form-group">
                        <p class="text-center">
                            Já registrado? <a href="#"" id=" btnJaRegistrado">
                                Entrar por aqui.
                            </a>
                        </p>
                    </div>

                </form>
            </div>
        </section>
        <!-- fim da seçao de recuperaçao de senha -->

        <!-- Inicio formulario de cadastro de novos usuarios -->
        <section class="row mt-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaRegistro">
                <h2 class="text-center mt-2">Registra-se aqui</h2>
                <form action="#" method="post" class="p-2" id="formRegistro">

                    <div class="form-group">
                        <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" placeholder="Nome completo" required minlength="6">
                    </div>

                    <div class="form-group">
                        <input type="text" name="nomeDoUsuario" id="nomeDoUsuario" class="form-control" placeholder="Nome de usuário" required minlength="5">
                    </div>


                    <div class="form-group">
                        <input type="email" name="emailUsuario" id="emailUsuario" class="form-control" placeholder="E-mail" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="senhaDoUsuario" id="senhaDoUsuario" class="form-control" placeholder="Senha" required minlength="6">
                    </div>

                    <div class="form-group">
                        <input type="password" name="senhaUsuarioConfirmar" id="senhaUsuarioConfirmar" class="form-control" placeholder="Confirmar senha" required minlength="6">
                    </div>

                    <div class="form-group mt-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="concordar" id="concordar" class="custom-control-input">
                            <label for="concordar" class="custom-control-label">
                                Eu concordo com <a href="#"> os termos e condiçoes</a>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="::Registrar::" name="btnRegistrar" id="btnRegistrar" class="btn btn-primary btn-block">
                    </div>

                    <div class="form-group">
                        <p class="text-center">
                            Já registrado? <a href="#" id="btnJaRegistrado2">
                                Entrar por aqui.
                            </a>
                        </p>
                    </div>


                </form>
            </div>
        </section>

        <!-- Final do formulario de cadastro de novos usuarios -->

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <script>
        //codigo jQuery para mostrar e ocultar os formularios
        $(function() {

            //Validaçao de formularios
            jQuery.validator.setDefaults({
                success: "valid"
            });
            $("#formRegistro").validate({
                rules: {
                    senhaDoUsuario: "required",
                    senhaUsuarioConfirmar: {
                        equalTo: "#senhaDoUsuario"
                    }
                }
            });
            //
            $("#formLogin").validate();

            $("formSenha").validate();


            //mostrar e ocultar formularios

            $("#btnEsqueci").click(function() {
                $("#caixaLogin").hide(); //ocultar
                $("#caixaSenha").show(); //ocultar
            });

            $("#btnJaRegistrado").click(function() {
                $("#caixaSenha").hide(); //ocultar
                $("#caixaLogin").show(); //ocultar
            });

            $("#btnRegistrarNovo").click(function() {
                $("#caixaLogin").hide(); //ocultar
                $("#caixaRegistro").show(); //ocultar
            });

            $("#btnJaRegistrado2").click(function() {
                $("#caixaLogin").show(); //ocultar
                $("#caixaRegistro").hide(); //ocultar
            });

        });
    </script>
    <script>
        /*
         * Translated default messages for the jQuery validation plugin.
         * Locale: PT_BR
         */
        jQuery.extend(jQuery.validator.messages, {
            required: "Este campo &eacute; requerido.",
            remote: "Por favor, corrija este campo.",
            email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
            url: "Por favor, forne&ccedil;a uma URL v&aacute;lida.",
            date: "Por favor, forne&ccedil;a uma data v&aacute;lida.",
            dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
            number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lido.",
            digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
            creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
            equalTo: "Por favor, forne&ccedil;a o mesmo valor novamente.",
            accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
            maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres."),
            minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
            rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
            range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
            max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
            min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")
        });
    </script>
</body>

</html>