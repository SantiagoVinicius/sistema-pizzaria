<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria San'Tiago</title>
    <link rel="stylesheet" href="bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h3>pizzaria</h3>
    <h1>San'Tiago</h1><br>

<div class="D-entrega">
    <form>
        <fieldset>
        <h6 class= "nome">DADOS PARA ENTREGA</h6>
            <label for="nome" class="nome">Nome:</label><br>
            <input name="nome" id="nome" class="nome" style="border: 1px solid black" type="text"><br>
            <label for="endereco" class="end">Endereço:</label><br>
            <input name="endereco" id="endereco" class="end" style="border: 1px solid black" type="text"><br>
            <label for="cidade" class="cidade">Cidade:</label><br>
            <input name="cidade" id="cidade" class="cidade" style="border: 1px solid black" type="text"><br>
            <select  class="est" style="border: 1px solid black" name="estados-brasil">
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
        </fieldset>
    </form>
</div>


<script src="bootstrap-5/bootstrap.bundle.min.js"></script>
<script src="js/funcoes.js"></script> 
</body>
</html>