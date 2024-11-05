<?php
include_once "funcao.php";

     if (! isset($usuario) ) {
        $usuario = array();
        $usuario['id'] = 0;
        $usuario['nome'] = "";
        $usuario['email'] = "";
        $usuario['id_academia'] = "";
        $usuario['senha'] = "";
      }
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
        <h1>Formulario Usuario</h1>
        <form action="salvarUsuario.php" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $usuario['id']; ?>">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="id_academia" class="form-label">Academia</label>
                <select class="form-select" name="id_academia" id="id_academia">
                  <?php
                    foreach($academias as $academia) {
                      $selected = "";
                      if ($academia['id'] == $usuario['id_academia']) {
                        $selected = "selected";
                      }
                      echo "<option $selected value='{$academia['id']}'>{$academia['nome']}</option>";
                    }
                  ?>
                  
                </select>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $usuario['senha']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>