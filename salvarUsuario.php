<?php
    include "funcao.php";
    $dados = array();
    $dados['id'] = $_POST['id'];
    $dados['nome'] = $_POST['nome'];
    $dados['email'] = $_POST['email'];
    $dados['id_academia'] = $_POST['id_academia'];
    $dados['senha'] = $_POST['senha'];

    if ($dados['id'] == 0) {
        salvar_usuario($dados);
    } else {
        alterar_usuario($dados);
    }
    header("location: http://localhost/atv1/listagemUsuario.php");
?>