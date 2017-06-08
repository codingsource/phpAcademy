<?php
    echo '<big>Primeiro teste PHP</big>';
    
    echo '<br><br>';
    
    echo 'Hello Word!';
 
    $x = 0;    
    
    echo '<br><br>';
    
    define('PI', 3.14);
    $algumValor = 50;
    $resultado = $algumValor * PI;
    echo 'resultado ' . $resultado . ' <br>';
    
    echo 'Operadores';
    
    echo '<br><br>';
    
    echo '0 + 4 = ' . $x = $x + 4;
    
    echo '<br><br>';
    
    echo $x . ' - 2 = ' . $x - 2;
    
    echo $x . '<br><br>';
    
    echo $x . ' * 6 = ' . $x * 6;
    
    echo '<br><br>';
    
    echo $x . ' / 4 = '  . $x / 4;
    
    echo '<br><br>';
    
    echo $x . ' % 3 = ' . $x % 3;
    
    echo '<br><br>';
    
    echo 'Incremento';
    
    echo '<br>';
    
    echo '$x++ <br> $x--';
    
    echo '<br><br>';
    
    echo 'Operações matemáticas rápidas';

    echo '<br><br>';
    
    echo '$x = 100 <br>' . $x = 100;
    
    echo '<br> $x += 50 <br>' . $x += 50;
    
    echo '<br> $x -= 50 <br>' . $x -= 50;

    echo '<br> $x *= 5 <br>' . $x *= 5;
    
    echo '<br> $x /= 2 <br>' . $x /= 2;
        
    echo '<br>Pega o resto :  $x %= 10 <br>' . $x %= 3;

    echo '<br><br>perações matemáticas rápidas<br><br>  ';
    
    echo '<br><br>';
    
    echo 'Condição';    
    
    echo '<br><br>';
    
    $idade = 16;
    
    if($idade > 0 && $idade < 16) {
        echo 'ok';
    }
    
    
    if ($idade <= 15 || $idade >= 16) {
        echo 'Você tem 16 anos';
    }
    
    echo '<br><br>';
    
    if ($idade == 16) {
        echo 'Idade e igual à 16';
    } else {
        echo 'Você não 16 anos';
    }
    
    echo '<br><br>';
        
    echo '';
    
    echo '<br><br>';
    
    echo 'Exercicio em aula';
    
    $cotacaoDolar = 3.30;
    $valorDoReal = 150;
    $totalEmDolar = $valorDoReal / $cotacaoDolar;
    
    echo '<br> R$ ' . $valorDoReal . ' compram U$ ' .   round($totalEmDolar) . '<br><br>';
    
    $x = 'Vermelho';
    
    switch ($x) {
        case 'Vermelho':
            echo 'PARE';
            break;
        case 'Amarelo':
            echo 'Atenção';
            break;
        case 'Verde':
            echo 'Siga';
            break;
        default:
            echo 'COR INVALIDA!!!!';
            break;
    }
    
    echo '<br><br> Repetição <br><br>';
    
    echo 'Crescente<br>';
    for($i = 5; $i <= 17; $i++) {
        echo $i . '<br>';
    }
    
    echo '<br>Decrescente<br>';
    for($i = 17; $i >= 5; $i--){
        echo $i . '<br>';
    }
    
    $x = 5;
    while($x != 0) {
        echo '<br>$x ==> ' . $x--;
    }
    
    do {
        echo '<br><br>Roda pelo menos uma vez';
        echo '<br>$x ==> ' . $x++;   
    }while(false);
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>