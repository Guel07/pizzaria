<?php 
    class CarrinhoService 
    {
        private $carrinho;
        private $conexao;

        public function __construct(Carrinho $carrinho, Conexao $conexao)
        {
            $this->conexao = $conexao->conectar();
            $this->carrinho = $carrinho;
        }

        public function inserir()
        {
            $query = "insert into itens_produtos (quantidade,id_produto,valorvenda,nomecliente,endereco,observacao	
            ) 
            values (?,?,?,?,?,?);";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->carrinho->__get('quantidade'));
            $stmt->bindValue(2,$this->carrinho->__get('id_produto'));
            $stmt->bindValue(3,$this->carrinho->__get('valorvenda')*$this->carrinho->__get('quantidade'));
            $stmt->bindValue(4,$this->carrinho->__get('nomecliente'));
            $stmt->bindValue(5,$this->carrinho->__get('endereco'));
            $stmt->bindValue(6,$this->carrinho->__get('observacao'));
            
            $stmt->execute();
            
            
        }

        public function recuperar()
        {
            $query = 'select * from produtos';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperarCarrinho($id)
        {
            $query = 'select * from itens_produtos where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        
        public function excluir()
        {
            $query = 'delete from itens_produtos where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->carrinho->__get('id'));
			$stmt->execute();
           
        }
        public function recuperarVendas()
        {
            $query = 'SELECT p.foto,p.descricao,p.id,i.id as id_item,i.quantidade,i.id_produto,i.nomecliente,i.valorvenda,i.endereco,i.observacao
            from produtos p, itens_produtos i
            WHERE p.id=i.id_produto;';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function alterar()
        {
            $query = "update produtos set quantidade=?,id_produto=?,valorvenda=?,nomecliente=?,endereco=?,observacao=? where id = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$this->carrinho->__get('quantidade'));
			$stmt->bindValue(2,$this->carrinho->__get('id_produto'));
            $stmt->bindValue(3,$this->carrinho->__get('valorvenda'));
            $stmt->bindValue(4,$this->carrinho->__get('nomecliente'));
            $stmt->bindValue(5,$this->carrinho->__get('endereco'));
            $stmt->bindValue(6,$this->carrinho->__get('observacao'));
			$stmt->bindValue(7,$this->carrinho->__get('id'));
            $stmt->execute();
            
            
        }
        public function recuperarLoginCli($email,$senha){
            $query = 'select id,quantidade,id_produto,valorvenda,nomecliente,endereco,observacao 
            from produtos where quantidade = ? id_produto = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1,$email);
            $stmt->bindValue(2,$senha);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ); 
        }
    }
?>