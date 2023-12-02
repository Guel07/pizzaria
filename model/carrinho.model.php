<?php 
    class Carrinho
    {
        private $id;
        private $quantidade;
        private $id_produto;
        private $valorvenda;
        private $nomecliente;
        private $endereco;
        private $observacao;
        

        public function __set($atribute, $value)
        {
            $this->$atribute = $value;
        }

        public function __get($atribute)
        {
            return $this->$atribute;
        }
        
    }

?>