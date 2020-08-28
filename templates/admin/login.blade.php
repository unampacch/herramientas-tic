<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="/site.webmanifest">
    <link rel="apple-touch-icon" href="/icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/css/admin/login.css">
</head>

<body>
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <h1>Herramientas Tic's</h1>
                        <h4>Ingresa con tu usuario y contraseña para continuar</h4>
                        <form role="form" action="/admin" method="post" id="login-form" autocomplete="off">
                            <div class="form-group">
                                <label for="email" class="sr-only">Usuario</label>
                                <input name="email" id="email" class="form-control" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <label for="key" class="sr-only">Contraseña</label>
                                <input type="password" name="key" id="key" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="checkbox">
                                <span class="character-checkbox" onclick="showPassword()"></span>
                                <span class="label">Mostrar contraseña</span>
                            </div>
                            <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Ingresar">
                        </form>
                    </div>
                </div>
                <!-- /.col-xs-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function showPassword() {
            var key_attr = $('#key').attr('type');

            if (key_attr != 'text') {
                $('.checkbox').addClass('show');
                $('#key').attr('type', 'text');
            } else {
                $('.checkbox').removeClass('show');
                $('#key').attr('type', 'password');
            }

        }
    </script>
</body>

</html>
