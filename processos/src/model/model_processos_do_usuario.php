<?php
 
 include 'database.php';
 $pdo = Database::connect();
 //$sql = 'SELECT p.id ,p.numeroProcesso,p.tribunal,p.cliente,p.observacoes,s.fase as situacao FROM processos p,fases s where p.id=1 and p.numeroProcesso=s.id_processo';
 $sql = 'SELECT p.numeroProcesso,p.tribunal,p.situacao,p.id_cliente,p.observacoes from processos p';
 $all_table = array();
 
 foreach ($pdo->query($sql) as $row) {
 	array_push($all_table, $row);
 	echo $row['situacao'];
 }

 Database::disconnect();
 echo json_encode(array("table" => $all_table));

?>