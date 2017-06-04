<?php
spl_autoload_register(function($nomeDaClasse) {
    require_once($nomeDaClasse.".php");
});

class CalculadoraDeDescontos{
  public function realizaDesconto(Orcamento $orcamento){
   $d1 = new Desconto5Itens();
   $d2 = new Desconto500Reais();
   $d3 = new Desconto300Reais();
   $d4 = new SemDesconto();

   $d1->setProximo($d2);
   $d2->setProximo($d3);
   $d3->setProximo($d4);
   $valor =  $d1->descontos($orcamento);
   return $valor;
  }
}
 ?>
