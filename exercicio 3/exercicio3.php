<?php
	$nome = array(	array( 'nome' => "Italo", 'idade' => 18 ),
      				array( 'nome' => "Paulo", 'idade' => 20 ),
      				array( 'nome' => "Andre", 'idade' => 21 ),
      				array( 'nome' => "Rafael", 'idade' => 22 )
);

$fp = fopen('exercicio.csv', 'r');

foreach ($nome as $linha) {
 	fputcsv($nome, $linha);

 	echo ' Nome: ' . $linha['nome'] . ",  ";

 	echo ' Idade: ' . $linha['idade'] . '<br>';

 } 
 fclose($fp);
?>