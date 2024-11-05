<?php
    include "funcao.php";
    $academias = getAcademias();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include "navbar.php";
    ?>

    <div class = "container">

        <table class="table table-striped table-bordered">
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Estado</th>
            <th scope="col">Cidade</th>
            <th scope="col">Bairro</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th>Apagar</th>
            <th>Editar</th>

            <?php
                foreach($academias as $academia) {
                  echo "
                    <tr>
                        <th scope='row'>{$academia['id']}</th>
                        <td>{$academia['nome']}</td>
                        <td>{$academia['estado']}</td>
                        <td>{$academia['cidade']}</td>
                        <td>{$academia['bairro']}</td>
                        <td>{$academia['numero_endereco']}</td>
                        <td>{$academia['numero_telefone']}</td>
                        <td>
                        <a class = 'btn btn-danger' href='apagarAcademia.php?id={$academia['id']}'>x</a></td>
                        <td>
                        <a class = 'btn btn-primary' href='alterarAcademia.php?id={$academia['id']}'>+</a></td>
                    </tr>
                  ";  
                }
              ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>