<?php
class Orcamento {
  private $valor;
  private $item;

  function __construct($novoValor){
    $this->valor = $novoValor;
    $this->item = array();
  }
  public function getValor(){
    return $this->valor;
  }
  public function getItem(){
    return $this->item;
  }
  public function addItem(Item $novoItem){
      $this->item[] = $novoItem;
  }

}

 ?>
