<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Consumo</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <div class="formulario">    
    <h1>Calcular Consumo de Energia Elétrica (kWh)</h1>
    <form method="post" action="calc.php">
        <p>Potência do aparelho em Watts: <input type="number" name="pot" placeholder="0 Watts" required oninvalid="this.setCustomValidity('Insira a Potência!!')" autofocus>  
        <p>Tempo de uso por dia (em horas): <input type="number" name="temp" placeholder="0 Horas" required oninvalid="this.setCustomValidity('Insira o Tempo de uso!!!')"> 
        <p>Dias de uso: <input type="number" name="dias" placeholder="0 Dias" required oninvalid="this.setCustomValidity('Insira os Dias de uso!!')" autocomplete="on"> 
        <p>Preço do kWh (R$): <input type="number" step="0.01" name="kwh" placeholder="R$00.00" required oninvalid="this.setCustomValidity('Insira o Valor do kWh!!')" autocomplete="on"><br> 
        
        <input type="submit" id="botao" value="Calcular"><br>

    </form>
    </div>
    </div>
</body>
</html>