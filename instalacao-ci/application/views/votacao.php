<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/angular-spinkit@0.3.4/build/angular-spinkit.min.css">

    <!-- Custom CSS -->
    <?php echo assets_css('styles.css') ?>

    <title>Reuniões</title>
</head>
<body class="bg-light" ng-controller="VotarItemDePautaController as controller">

<nav class="navbar-grey navbar navbar-expand-lg navbar-dark bottom-30">

    <div class="row margin-left">
        <a class="navbar-brand h1 mb-0 logo" href="#">
            <?php echo assets_img('logo.png') ?>
        </a>
</nav>

<!--Lista de reuniões-->
<div class="container bg-white" id="contents">

    <div class="bottom-30">
        <h2 id="titulo" class="text-center font-weight-bold text-secondary app-h2">Reuniões</h2>
        <p id="descricao" class="text-center font-weight-bold text-secondary app-h2-description">
            Clique no botão para abrir uma reunião para os membros poderem se registrar.</p>
    </div>

    <form id="form_reuniao" method="post" action="<?php route('encaminha') ?>">

    </form>

</div>

<!--Rodapé-->
<div id="footer" class="container text-center">
    <a href="javascript:abrirDialog('ptl/sistema/centralDeAjuda',
                                        'dialog_modal_padrao', '500', '540',
                                        'Central de Ajuda',
                                        '',
                                        'dialog_modal_padrao')" class="text-success">
        <img src="https://guri.unipampa.edu.br/public/themes/moder//imgs/help_verde.png" alt="Central de Ajuda">
        Central de Ajuda</a> <br><br>
    Desenvolvido:
    <a href="http://www.dtic.unipampa.edu.br" target="_new" class="text-success">DTIC</a> -
    <a href="http://www.unipampa.edu.br" target="_new" class="text-success">Universidade Federal do Pampa</a> <br>


    <p class="center">
        <a href="http://validator.w3.org/check?uri=referer" target="_new">
            <img src="https://guri.unipampa.edu.br/public/themes/moder//imgs/valid-xhtml10-blue.png"
                 alt="Valid XHTML 1.0 Transitional" height="23" width="66">
        </a>
    </p>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/socket.io-client@2.2.0/dist/socket.io.slim.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/angular-spinkit@0.3.4/build/angular-spinkit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/ui-bootstrap4@3.0.5/dist/ui-bootstrap-3.0.5.min.js"></script>

<?php echo assets_js('angular-socket-io-master/socket.min.js') ?>
<?php echo assets_js('main.js') ?>
</body>
</html>