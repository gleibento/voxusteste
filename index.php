
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-signin-client_id" content="465881405609-tpvbe0ejbt38gbtf0li7stvkviqfso91.apps.googleusercontent.com">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Signin</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">
            <form class="form-signin">
                <h2 class="form-signin-heading"> sign in</h2>
                <label for="inputEmail" class="sr-only">Email </label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
                <div class="row text-center" style="margin-top: 20px">
                    <h4>Acesse com sua conta do google</h4>
                </div>
                <div class="row text-center" style="margin: 20px 0 0 80px">
                    <span class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></span>
                </div>
                <div id="resp"></div>
            </form>
        </div> <!-- /container -->
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="js/googleplus.js"></script>
    </body>
</html>
