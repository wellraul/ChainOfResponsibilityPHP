<?php
class Desconto500Reais implements IDescontos{
    private $proximoDesconto;
  public function descontos(Orcamento $orcamento){
          if($orcamento->getValor() > 500){
        return $orcamento->getValor() * 0.05;
      } else{
        return $this->proximoDesconto->descontos($orcamento);
      }
  }
  public function setProximo(IDescontos $novoProximo){
    $this->proximoDesconto = $novoProximo;
}
}
 ?>
