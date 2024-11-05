<?php
    include "funcao.php";
    $id = $_GET['id'];
    $usuario = getUsuarioById($id);
    include "formUsuario.php";

?>