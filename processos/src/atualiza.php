<html lang="pt-br">
  <head>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

      <title>Atualiza</title>
  </head>

<body>
  <!-- Menu topo -->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../../control/logout.php">Sair</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>

  <div id="detalhes" class="jumbotron">
    <div class="container">
      <h1>Detalhes</h1>
      <p>Acompanhe a situação dos seus processos</p>
    </div>
  </div>



<?php
    // //TESTA CLASSE STF_PULL.php
    // include 'classes_pull/STF_PULL.php';
    // $obj = new STF_PULL('RE 328778');
    // $obj->pull();
    // $lista_processos_pull = $obj->getListaFases();
    // echo var_dump($lista_processos_pull[0]);

    //TESTA CLASSE TRE_PULL.php
    // include 'classes_pull/TRE_PULL.php';
    // $obj = new TRE_PULL('145892013');
    // $obj->pull();
    // $lista_processos_pull = $obj->getListaFases();
    // echo var_dump($lista_processos_pull[0]);

    include 'classes_pull/TSE_PULL.php';
    $obj = new TSE_PULL('167192001');
    $obj->pull();
    $lista_processos_pull = $obj->getListaFases();
    echo var_dump($lista_processos_pull[0]->getNome());


  
    //TESTA CLASSE TRF_PULL.php
    //include 'TRF_PULL.php';
    //$obj = new TRF_PULL('201302010125452');
    //$obj->pull();
    //$lista_processos_pull = $obj->getListaFases();
    //echo var_dump($lista_processos_pull);

    //TESTA CLASSE TRF_REGIAO5_PULL.php
    //include 'TRF_REGIAO5_PULL.php';
    //$obj = new TRF_REGIAO5_PULL('00139061320004058300');
    //$obj->pull();
    //$lista_processos_pull = $obj->getListaFases();
    //echo var_dump($lista_processos_pull);

    ?>