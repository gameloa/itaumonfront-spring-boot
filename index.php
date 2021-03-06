<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="js/config.js"></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body onload="carregarindex()">

    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 pt-3 shadow border border-dark rounded-lg text-dark bg-transparent">
                <form>
                    <legend class="p-2 mb-1 text-center bg-info text-white font-weight-bolder">Login</legend>
                    <br>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-lg font-weight-bold">Usuario</label>
                                <input type="text" id="txtusuario" class="text-uppercase form-control form-control-lg">
                                <small id="hlpusuario" class="form-text text-muted user-select-all">Informe sua Funcional ou
                                    RACF</small>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="form-group">
                                <label class="col-form-label col-form-label-lg font-weight-bold">Senha</label>
                                <input type="password" id="txtsenha" class="form-control form-control-lg">
                                <small id="hlpsenha" class="form-text text-muted user-select-all">Sua senha deve conter no minimo 8
                                    caracteres</small>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="form-group">
                                <br>
                                <input onclick="logar()" type="button" id="btnlogin"
                                    class="btn btn-primary btn-lg btn-block font-weight-bold" value="Entrar">
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <br>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>