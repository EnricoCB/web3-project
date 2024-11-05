<?php
    include "funcao.php";
    $id = $_GET['id'];
    $academia = getAcademiaById($id);
    include "formAcademia.php";

?>