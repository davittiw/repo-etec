<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Atividade Online</title>
</head>

<body>
    <div class="w3-container w3-teal">
        <h2>Forma de pagamento</h2>
    </div>
    <form class="w3-container" method="post" action="pagamen.php">
        <label class="w3-text-teal"><b>Nome do Cliente</b></label>
            <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">

        <label class="w3-text-teal"><b>Valor  da Compra</b></label>
            <input class="w3-input w3-border w3-light-grey" name="txtValorCompra" type="number">
            
        <label class="w3-text-teal"><b>Escolha a forma de Pagamento:</b></label>
            <select class="w3-input w3-border w3-light-grey"  name="cmbPag">
                <option value="cartaoCredito">Cartão de Crédito</option>
                <option value="boleto">Boleto</option>
                <option value="deposito" selected>Depósito</option>
            </select>
        <br>
        <button class="w3-btn w3-blue-grey">Enviar</button>
    </form>
</body>
</html>