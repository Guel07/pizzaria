<?php
class Produto{
	private $id;
	private $descricao;
	private $ingredientes;
	private $quantidade;
	private $custo;
    private $foto;
	
	public function __get($atributo){
		return $this->$atributo;
	}
	
	public function __set($atributo,$valor){
		$this->$atributo = $valor;
	}
}
/*$pro = new produto();
$pro->__set('id','01');
echo $pro->__get('id');*/
?>