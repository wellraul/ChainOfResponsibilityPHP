<?php
class SemDesconto implements IDescontos{
  public function descontos(Orcamento $orcamento){
    return 0;
  }
  public function setProximo(IDescontos $proximo){
    //sem ação
  }
}
 ?>
