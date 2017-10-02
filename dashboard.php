<?php
session_start();
if (empty($_SESSION['emailUser'])) {
    echo '<div class="alert alert-danger">nenhum usuario encontrado</div>';
} else {
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="google-signin-client_id" content="465881405609-tpvbe0ejbt38gbtf0li7stvkviqfso91.apps.googleusercontent.com">
            <meta name="description" content="">
            <meta name="author" content="">
            <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="css/syle.css" rel="stylesheet">
            <title>Dashboard</title>
        </head>
        <body>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">DASHBOARD</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Tarefa</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="index.php" onclick="signOut();">Sair</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <form class="form-horizontal">
                <div class="container">
                    <div class="form-group col-md-12">
                        <input type="file" name="arquivo" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-success upload" class="form-control">Cadastrar</button>
                    </div>
                    <div class="progress progress-bar-striped active col-md-12 form-group">
                        <div class="progress-bar" style="width: 0%">
                        </div>
                    </div>
                </div>
            </form>
            <script src="bootstrap/js/jquery.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            <script src="js/logout.js"></script>
            
            <script>
                $(document).on('submit', 'form', function (e) {
                    e.preventDefault();
                    $form = $(this);
                    var formdata = new FormData($form[0]);
                    var request = new XMLHttpRequest();
                    request.upload.addEventListener('progress', function (e) {
                        var porcentagem = Math.round(e.loaded / e.total * 100);
                        $form.find('.progress-bar').width(porcentagem + '%').html(porcentagem + '%');
                    });
                    request.addEventListener('load', function (e) {
                        $form.find('.progress-bar').addClass('progress-bar-success').html('upload completo...');
                        setTimeout("window.open(self.location,'_self');",1000);
                    });
                    request.open('post','upload.php');
                    request.send(formdata);
                });
            </script>
        </body>
    </html>
    <?php
}