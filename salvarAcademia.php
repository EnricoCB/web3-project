<?php
    include "funcao.php";
    $dados = array();
    $dados['id'] = $_POST['id'];
    $dados['nome'] = $_POST['nome'];
    $dados['estado'] = $_POST['estado'];
    $dados['cidade'] = $_POST['cidade'];
    $dados['bairro'] = $_POST['bairro'];
    $dados['numero_endereco'] = $_POST['numero_endereco'];
    $dados['numero_telefone'] = $_POST['numero_telefone'];

    if ($dados['id'] == 0) {
        salvar_academia($dados);
    } else {
        alterar_academia($dados);
    }
    header("location: http://localhost/atv1/listagemAcademia.php");
?>