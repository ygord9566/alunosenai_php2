<?php
echo "<h2>ARRAYS</h2>";
echo "um array é na verdade,um mapa ordenado.Ou seja,<br> é um tipo que relaciona valores a chaves.<br>Portanto, é uma lista de valores que serão armazenados na memoria.";
echo "<hr>";
echo "<h2>criando o array</h2>";
$arr = [ "primeiro","segundo","terceiro"];
 print_r ($arr);
echo "<hr>";
echo "<h2>array associativos</h2>";
$arr =  array ("nome"=>"Alberto","sobrenome"=>"Roberto","idade"=>"105");
echo "nome:".$arr["nome"]."<br>";
echo "sobrenome:".$arr["sobrenome"]."<br>";
echo "idade:".$arr["idade"];
echo "<hr>";
echo "<h2>array multidimencional</h2>";
$arr = array(
    array ("primeiro","segundo"),
    array ("terceiro","quarto")
);
print_r ($arr);
echo "<br>";
print_r ($arr[1]);
echo "<br>";
echo $arr [1][1];
echo "<hr>";
echo "<h2>contando os elementos de um array</h2>";
$numeros = [1,2,300,7000,23,56,89,21,54,34,345];
echo count ($numeros);
echo "<hr>";
echo "<h2>adicionando dinamicamente elementos em um array</h2>";
$arr = array ();
$arr[] ="azul";
$arr[] = "vermelho";
$arr[] = "amarelo";
print_r ($arr);
echo "<hr>";
echo "<h2>adicionando no inicio do array</h2>";
$frutas = array ("maçã","melão","melancia");
array_unshift ($frutas,"abacaxi");
print_r ($frutas);
echo "<hr>";
echo "<h2>adicionando no final do array</h2>";
$frutas = array ("maçã","melão","melancia");
array_push ($frutas,"abacaxi");
print_r ($frutas);
echo "<hr>";
echo "<h2>removendo o primeiro array</h2>";
$frutas = array ("maçã","melão","melancia");
array_push ($frutas);
print_r ($frutas);
echo "<hr>";
echo "<h2>procurando o elemento do array</h2>";
$frutas = array ("maçã","melão","melancia");
$proc = "melancia";
$index = array_search($proc,$frutas);
if ($index !== false){
    echo "o elemento $proc esta na posisão $index";
}else{
    echo "elemento não encontrado!";
}


?>