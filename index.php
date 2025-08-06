<?php
    $nome = "ygor";
    $idade = 21;
    echo "Meu nome é ".$nome.", e tenho ".$idade." anos.";
    echo "<hr>";
    echo "<center><h2>SENAI - DEVELOPER</h2></center>";
    echo "<hr>";
    $valor1 = 8;
    $valor2 = 11;
    echo "A soma dos valores foi:".$valor1+$valor2."<br>";
    echo "A subtração dos valores foi:".$valor1-$valor2."<br>";
    echo "A multiplicação dos valores foi:".$valor1*$valor2."<br>";
    $result = $valor1/$valor2;
    $numformatado = number_format($result, 2, ',', '.');
    echo "A divisão dos valores foi:".$numformatado;
    echo "<hr>";
    $datahora = date('d/m/Y H:i:s');
    echo "Data atual: ".$datahora;
    echo "<hr>";
    $data1 = new datetime('2025-01-01');
    //data: 2025-01-01 22:30:23 = y-m-d h:i:s
    $data2 = new datetime('2025-08-06');
    $intervalo = $data1->diff($data2);
    echo "a diferenca em anos:".$intervalo->y."<br>";
    echo "a diferença em meses:".$intervalo->m."<br>";
    echo "a diferença em dias:".$intervalo->days."<br>";
    $horas = $intervalo->days*24;
    echo "a diferenca em horas:".$horas;
    echo "<hr>";
    echo "<h2>função condicional - if</h2>";
    $a = 3;
    $b = 5;
    if ($a>$b){
        echo"A é maior que B!";
    }
    else {
        echo"B é maior que A!";
    }
    echo"Saiu do IF!";
?>