<?php
interface IDescontos{
  public function descontos(Orcamento $orcamento);
  public function setProximo(IDescontos $descontos);
}

 ?>
