<link rel="stylesheet" href="estilo.css">

<?php 
include ("./calcEletrica.php");
if ($_POST) {  
    $v1 = filter_input(INPUT_POST,'pot');
    $v2 = filter_input(INPUT_POST,'temp');
    $v3 = filter_input(INPUT_POST,'dias');
    $v4 = filter_input(INPUT_POST,'kwh');
    
    if ($_POST) {
    $consumo = $v1 / 1000 * $v2;
    $total = $consumo * $v3 * $v4;
    echo '<p>'.'O consumo em '.$v3.' dias do aparelho em reais é: R$'.$total; 
    }
}   


?>