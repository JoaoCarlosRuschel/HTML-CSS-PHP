<!DOCTYPE HTML>
<!-- PROFA INAIARA SEIBEL - PROGRAMAÇÃO WEB I - TEC UNISC!-->
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<!-- HTML !-->
<body>
   <form action="" method="post" >
      VALOR 1: <input name="num1" type="text"><br>
      VALOR 2: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
<?php
/* Declarando as variáveis */
   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];
/* Condicional com IF e ELSE */
   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
      else if($op == '-')
         $c = $a - $b;
      else if($op == '*')
         $c = $a*$b;
      else
         $c = $a/$b;
/* Imprimindo em tela o resultado*/
      echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
   }

?>       