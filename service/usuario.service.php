<?php 
    class UsuarioService 
    {
        private $usuario;
        private $conexao;

        public function __construct(Usuario $usuario, Conexao $conexao)
        {
            $this->conexao = $conexao->conectar();
            $this->usuario = $usuario;
        }

        public function inserir()
        {
            $query = "insert into usuarios (nome,email,senha) 
            values (?,?,?);";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->usuario->__get('nome'));
            $stmt->bindValue(2,$this->usuario->__get('email'));
            $stmt->bindValue(3,$this->usuario->__get('senha'));
            
            $stmt->execute();

            }
            

        public function recuperar()
        {
            $query = 'select id,nome,email,senha from usuarios';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperarUsuario($id)
        {
            $query = 'select id,nome,email,senha from usuarios where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        
        public function excluir()
        {
            $query = 'delete from usuarios where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->usuario->__get('id'));
           
            $stmt->execute();
            
        }

        public function alterar()
        {
            $query = "update usuarios set nome=?,email=?,senha=? where id = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->usuario->__get('nome'));
            $stmt->bindValue(2,$this->usuario->__get('email'));
            $stmt->bindValue(3,$this->usuario->__get('senha'));
            $stmt->bindValue(5,$this->usuario->__get('id'));
            
            $stmt->execute();
           
            
        }
        public function recuperarLoginUs($email,$senha){
            $query = 'select id,nome,email,senha
            from usuarios where email = ? and senha = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$email);
            $stmt->bindValue(2,$senha);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ); 
        }
    }
?>