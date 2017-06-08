<?php
    /*
    * Imprima na tela a soma de todos os números pares de 50 a 100 (incluindo-os).
    * O resultado deve ser 1950.
    * Desafio: Existe uma forma de construir sem o uso de comandos de decisão.
    */
    
    $somatorio = 0;
    
    for($i = 50; $i <= 100; $i += 2) {
        echo $i . '<br>';
        $somatorio += $i;
    }
    
    echo '<big>Soma dos números pares : </big>' . $somatorio;
    
    echo '<br><br><hr>';
    
    /*
    * Escreva um código que retorne o fatorial do número informado na variável $x.
    * Para o valor 4 o resultado deve ser 24.
    */
    echo '<big>Fatorial</big>';
    
    $n = 3;
    $res = 1;
    
    for ($i = $n; $i >= 1; $i--) {
        $res = $res * $i;
        echo $res . ', ';
    }
    
    
    
    echo '<br><br><hr>';
    /*
    * Escreva um código que calcule o salário de um vendedor. O código deve receber
    * o valor do salário fixo e o valor das vendas do mês do vendedor, que ganha
    * 3% do valor total das vendas, e mais 5% do valor que exceder de 1500.
    * Para o salário de 800 e vendas em 2000 deve resultar em 885.
    */
    
    $salarioBase = 800;
    $vendas = 2000;
    $baseVenda = 1500;
    
    $salarioAtual = $salarioBase + ($vendas / 100) * 3;
    
    echo 'Salario atual com os 3% das vendas (2000) : R$ ' . $salarioAtual . '<br>';
    
    if ($vendas > $baseVenda) {
        $excedente = $vendas - $baseVenda;
        $salarioAtual = $salarioAtual  +  ($excedente * 5) / 100;
    }
    
    echo 'Salário total com mais 5% do excedente da base de venda (meta R$ 1.500): R$ ' . $salarioAtual;
    
?>