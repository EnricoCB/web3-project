<?php
    include "funcao.php";
    $id = $_GET['id'];
    deletar_academia($id);
    header('location: http://localhost/atv1/listagemAcademia.php');
?>