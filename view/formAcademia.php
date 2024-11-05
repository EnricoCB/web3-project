<?php
     if (! isset($academia) ) {
        $academia = array();
        $academia['id'] = 0;
        $academia['nome'] = "";
        $academia['estado'] = "";
        $academia['cidade'] = "";
        $academia['bairro'] = "";
        $academia['numero_endereco'] = "";
        $academia['numero_telefone'] = "";
      }
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
        <h1>Formulario Academia</h1>
        <form action="salvarAcademia.php" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $academia['id']; ?>">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $academia['nome']; ?>">
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $academia['estado']; ?>">
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $academia['cidade']; ?>">
            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $academia['bairro']; ?>">
            </div>
            <div class="mb-3">
                <label for="numero_endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="numero_endereco" name="numero_endereco" value="<?php echo $academia['numero_endereco']; ?>">
            </div>
            <div class="mb-3">
                <label for="numero_telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="numero_telefone" name="numero_telefone" value="<?php echo $academia['numero_telefone']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>