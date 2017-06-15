<?php
spl_autoload_register(function($nomeDaClasse) {
    require_once($nomeDaClasse.".php");
});
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Design Patterns</title>
  </head>
  <body>


    <h1>Regra de descontos</h1>
<?php
    $orcamento = new Orcamento(1500);
    $realiza = new CalculadoraDeDescontos();
    $orcamento->addItem(new Item("ferro", 250));
    $orcamento->addItem(new Item("tijolo", 250));
    $orcamento->addItem(new Item("ferro", 250));
    $orcamento->addItem(new Item("cimento", 250));
    $orcamento->addItem(new Item("areia", 250));
    $orcamento->addItem(new Item("Azulejo", 250));

    echo $realiza->realizaDesconto($orcamento);
 ?>
  </body>
</html>
