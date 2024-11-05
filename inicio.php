<?php
    require_once "autoload.php";
        
    define("APP", "http://localhost/web3/mvc/");
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
    } else {
        $url = "index/index";
    }
    // noticia/listar
    // noticia/novo
    // noticia/salvar
    // noticia/editar/10
    // noticia/excluir/15
    $itens_url = explode('/', $url);
    $nomeControlador = ucfirst($itens_url[0])."Controller";
    $controlador = new $nomeControlador();
    $acao = $itens_url[1];
    if (count($itens_url)==2) {
        $controlador->$acao();
    } else {
        $id = $itens_url[2];
        $controlador->$acao($id);
    }
?>