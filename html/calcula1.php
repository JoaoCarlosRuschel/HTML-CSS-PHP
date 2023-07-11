<?php
/* PROFA INAIARA SEIBEL - PROGRAMAÇÃO WEB I - TEC UNISC */
$valor1 = $_POST['valor1'];
$valor2 =  $_POST['valor2'];
$tipo =  $_POST['tipo'];

/* Cria uma função com o nome "calcular" e define como
seus parâmetros as variáveis $a e $b */
function calcular($a,$b)
{
 // Declara as variáveis como globais
 global $valor1;
 global $valor2;
 global $tipo;
}
/* Cria uma estrutura condicional com o switch e testa qual
o valor da variável $tipo corresponde aos casos para
poderem ser executados corretamente */
switch($tipo)
{
 case 'Somar': $resultado = $a + $b; break;
 case 'Subtrair': $resultado = $a - $b; break;
 case 'Multiplicar': $resultado = $a * $b; break;
 case 'Dividir': $resultado = $a / $b; break;
}
return($resultado);
echo calcular($valor1,$valor2);
?>