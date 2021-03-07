<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Livros</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<!-- <meta http-equiv="refresh" content="4">-->
</head>

<body class="text-center" id="body" style="background-image: url('data:image/png;base64,<?php echo $livro[0][3] ?>');background-position: center;background-repeat: no-repeat;background-size: cover;">
    <nav class="navbar navbar-light navbar-expand-md bg-dark navigation-clean">
        <div class="container-fluid"><a class="navbar-brand text-white-50" href="<?php echo BASE_URL ?>"><i class="icon ion-android-arrow-back"></i>&nbsp;Voltar</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <div class="shadow-lg" id="content" style="height: 100%;opacity: 1;filter: blur(0px);width: 90%;margin: 0px auto;background-color: rgba(51,51,51,0.21); overflow-y: hidden;">
        <div style="width: 90%;margin: auto; background-color: lightgrey; border-radius: 5px; height: 80vh; ">
            <div class="container" style="width: 60%; ">
                <p>&nbsp;</p>
                <h1 class="text-left"><?php echo $livro[0][1];?></h1>
            </div>
            <div class="container">
                <div class="row" style="width: 1050px;">
                    <div class="col-auto col-md-6 offset-lg-9 text-center" style="margin: 0px 0px 0px 50px;"><img class="img-fluid border rounded" src="data:image/png;base64,<?php echo $livro[0][3] ?>" width="30%" style="margin: 20px;"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 offset-lg-0">
                        <p class="lead text-center" style="width: 100%;"><br><?php echo $livro[0][2] ?><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>