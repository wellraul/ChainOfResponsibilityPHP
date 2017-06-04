<?php

class Desconto5Itens implements IDescontos{
      private $proximoDesconto;
  public function descontos(Orcamento $orcamento){
    if(count($orcamento->getItem()) > 5){
      return $orcamento->getValor() * 0.5;
    } else{
      return $this->proximoDesconto->descontos($orcamento);
    }
  }
  public function setProximo(IDescontos $novoProximo){
    $this->proximoDesconto = $novoProximo;
}
}
 ?>
