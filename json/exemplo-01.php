<?php

$pessoas = array();

array_push($pessoas, array('nome'=>'João', 'idade'=>'20'));

array_push($pessoas, array('nome'=>'Glaucio', 'idade'=>'25'));

echo json_encode($pessoas);

//obs: no google chrome, abra apps, web store, e instale json viewer, para ver código melhor organizado

?>