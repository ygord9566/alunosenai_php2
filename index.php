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
    echo "<hr>";
    $n1 = 3;
    $n2 = 4;
    $n3 = 8;
    if ($n1> $n2 && $n1 > $n3) {
        echo " a variavel ".$n1. "é o valor maior!";
    }
    elseif ($n2>$n1 && $n2>$n3) {
        echo " a variavel ".$n2. "é o valor maior!";
    }
    else {
        echo " a variavel ".$n3. "é o valor maior!";
    }
    echo "<hr>";
    echo "<center><h2> numeros randomicos</h2></center>";
    $num = rand(1, 10);
    $meunum = 8;
    echo "o numero sorteado foi:".$num;
    if ($num == $meunum){
        echo "você ganhou :)";
    }
    else 
    echo "voce perdeu :(";
    echo "<hr>";
    for ($i=0; $i <=10; $i++){
        echo "passagem do laço for nº: ".$i. "<br>";
    }
    echo "<h2>tabuada</h2>";
    $numtab =5;
    for ($i=1; $i <=10; $i++){
        echo $numtab."X".$i."=".$numtab*$i."<br>";
    }
     echo "<hr>";
     echo "<h2>laço while</h2>";
     $x = 1;
     while ($x < 6) {
        echo "laço nº:".$x."<br>";
        $x++;
     }
     $a =0;
    while ($a < 100){
        echo $a."<br>";
        $a+=10;
    }
    echo "<hr>";
    echo "<h2>foreach</h2>";
    $cores = array ("azul","vermelho","bege","amarelo","branco");
    foreach ($cores as $cor) {
        echo $cor."<br>";
    }
    ?>