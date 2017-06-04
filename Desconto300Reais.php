<?php

class Desconto300Reais implements IDescontos{
  private $proximoDesconto;
 public function descontos(Orcamento $orcamento){
            if($orcamento->getValor() > 300){
        return $orcamento->getValor() * 0.3;
      } else{
        return $this->proximoDesconto->descontos($orcamento);
      }
  }
  public function setProximo(IDescontos $novoProximo){
    $this->proximoDesconto = $novoProximo;
  }
}

?>
