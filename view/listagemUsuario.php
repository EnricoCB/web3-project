<?php
    include "funcao.php";
    $usuarios = getUsuarios();
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
            <th scope="col">Email</th>
            <th scope="col">Academia</th>
            <th scope="col">Senha</th>
            <th>Apagar</th>
            <th>Editar</th>

            <?php
                foreach($usuarios as $usuario) {
                  echo "
                    <tr>
                      <th scope='row'>{$usuario['id']}</th>
                      <td>{$usuario['nome']}</td>
                      <td>{$usuario['email']}</td>
                      <td>{$usuario['academia_nome']}</td>
                      <td>{$usuario['senha']}</td>
                      <td>
                      <a class = 'btn btn-danger' href='apagarUsuario.php?id={$usuario['id']}'>x</a></td>
                      <td>
                      <a class = 'btn btn-primary' href='alterarUsuario.php?id={$usuario['id']}'>+</a></td>
                    </tr>
                  ";  
                }
              ?>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>