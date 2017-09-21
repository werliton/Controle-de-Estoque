<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Caúra Materiais! | </title>

    <!-- Bootstrap -->
    <link href="/css/theme-gentelela/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/theme-gentelela/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/css/theme-gentelela/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/css/theme-gentelela/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="/login" method="post">
                    <h1>Entrar no sistema</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Usuário" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Senha" required="" />
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Entrar no sistema</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div>
                            <h1><i class="fa fa-paw"></i> Caúra Materiais</h1>
                            <p>©2017 Todos os direitos reservados @4engs</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</div>
</body>
</html>
