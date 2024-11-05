<?php
    function get_connection() {
        try {
          $conexao = new PDO('pgsql:host=localhost;dbname=cadastro_academia', 'postgres', 'postgres');
        } catch (PDOException $e) {
          echo "erro de conexao";
        }    
        return $conexao; 
      }

      function getUsuarios() {
        $conexao = get_connection();
        $sql = 'SELECT usuario.*, academia.nome AS academia_nome FROM usuario JOIN academia ON academia.id = usuario.id_academia ORDER BY id';
        $usuarios = array();
        $sentenca = $conexao->query($sql, PDO::FETCH_ASSOC);
        foreach ( $sentenca as $usuario) {
          $usuarios[] = $usuario;
        }    
        return $usuarios;
      }

      function getAcademias() {
        $conexao = get_connection();
        $sql = 'SELECT * FROM academia ORDER BY id';
        $academias = array();
        $sentenca = $conexao->query($sql, PDO::FETCH_ASSOC);
        foreach ( $sentenca as $academia) {
          $academias[] = $academia;
        }    
        return $academias;
      }

      function deletar_usuario($id) {
        $conexao = get_connection();
        $stmt = $conexao->prepare("DELETE FROM usuario WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
      }
    
      function deletar_academia($id) {
        $conexao = get_connection();
        $stmt = $conexao->prepare("DELETE FROM academia WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
      }

      function salvar_usuario($dados) {
        $conexao = get_connection();
        $stmt = $conexao->prepare("INSERT INTO usuario (nome, email, id_academia, senha) VALUES (:nome, :email, :id_academia, :senha)");
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':id_academia', $dados['id_academia']);
        $stmt->bindParam(':senha', $dados['senha']);
        $stmt->execute();
      }
    
      function salvar_academia($dados) {
        $conexao = get_connection();
        $stmt = $conexao->prepare("INSERT INTO academia (nome, estado, cidade, bairro, numero_endereco, numero_telefone) VALUES (:nome, :estado, :cidade, :bairro, :numero_endereco, :numero_telefone)");
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':estado', $dados['estado']);
        $stmt->bindParam(':cidade', $dados['cidade']);
        $stmt->bindParam(':bairro', $dados['bairro']);
        $stmt->bindParam(':numero_endereco', $dados['numero_endereco']);
        $stmt->bindParam(':numero_telefone', $dados['numero_telefone']);
        $stmt->execute();
      }

      function getUsuarioById($id) {
        $conexao = get_connection();
        $stmt = $conexao->prepare("SELECT * FROM usuario WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
      }
    
      function getAcademiaById($id) {
        $conexao = get_connection();
        $stmt = $conexao->prepare("SELECT * FROM academia WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $academia = $stmt->fetch(PDO::FETCH_ASSOC);
        return $academia;
      }

      function alterar_usuario($dados) {
        $conexao = get_connection();
        $stmt = $conexao->prepare("UPDATE usuario SET nome=:nome, email=:email, id_academia=:id_academia, senha=:senha WHERE id=:id");
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':id_academia', $dados['id_academia']);
        $stmt->bindParam(':senha', $dados['senha']);
        $stmt->bindParam(':id', $dados['id']);
        $stmt->execute();
    
      }
    
      function alterar_academia($dados) {
        $conexao = get_connection();
        $stmt = $conexao->prepare("UPDATE academia SET nome=:nome, estado=:estado, cidade=:cidade, bairro=:bairro, numero_endereco=:numero_endereco, numero_telefone=:numero_telefone WHERE id=:id");
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':estado', $dados['estado']);
        $stmt->bindParam(':cidade', $dados['cidade']);
        $stmt->bindParam(':bairro', $dados['bairro']);
        $stmt->bindParam(':numero_endereco', $dados['numero_endereco']);
        $stmt->bindParam(':numero_telefone', $dados['numero_telefone']);
        $stmt->bindParam(':id', $dados['id']);
        $stmt->execute();
    
      }

?>