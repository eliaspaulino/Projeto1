<?php 
    include 'classes_pull/TSE_PULL.php';
    $obj = new TSE_PULL('167192001');
    $obj->pull();
    $lista_processos_pull = $obj->getListaFases();
    echo $lista_processos_pull[0]->getNome();
?>