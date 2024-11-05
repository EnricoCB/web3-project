<?php

include "funcao.php";

$id = $_GET['id'];
deletar_usuario($id);

header("location: http://localhost/atv1/listagemUsuario.php");

?>