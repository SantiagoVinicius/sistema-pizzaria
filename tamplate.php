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
<div class="circulo"></div>
<div class="D-entrega">
    <form>
        <fieldset>
        <h3>Pizzaria</h3>
        <h1>San'Tiago</h1><br>
        <h6 class= "titulo-d">DADOS PARA ENTREGA</h6>
            <label for="nome" class="titulo">Nome:</label><br>
            <input name="nome" id="nome" class="nome" style="border: 1px solid black;background:gray;" type="text"><br>
            <label for="endereco" class="end">Endereço:</label><br>
            <input name="endereco" id="endereco" class="end" style="border: 1px solid black; background:gray;" type="text"><br>
            <label for="cidade" class="cidade">Cidade:</label><br>
            <input name="cidade" id="cidade" class="cidade" style="border: 1px solid black;background:gray;" type="text"><br>
            <select  class="est" style="border: 1px solid black;background:gray;" name="estado">
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
            
            <h6 class="titulo-p">PIZZA</h6>
            <input type="radio" name="tamanho" class="tamanho" value="P">
            <label for="tamanho" class="tamanho">P</label>
            <input type="radio"name="tamanho" class="tamanho" value="M">
            <label for="tamanh" class="tamanho">M</label>
            <input type="radio" name="tamanho"class="tamanho" value="G">
            <label for="tamanho" class="tamanho">G</label>
            <select class="sabor" name="sabor"style="border: 1px solid black;background:gray;" name="sabor">
            <option value="calabresa" >Calabresa</option>
            <option value="portuguesa">Portuguesa</option>
            <option value="napolitano">Napolitano</option>
            <option value="escarola">Escarola</option>
            </select><br>
            <input type="radio" class="borda" name="borda"value="NORMAL">
            <label for="borda" class="borda">NORMAL</label><br>
            <input type="radio" class="borda"name="borda" value="CATUPIRY">
            <label for="borda" class="borda">CATUPIRY</label><br>
            <input type="radio" class="borda"name="borda" value="CHEDDAR">
            <label for="borda" class="borda">CHEDDAR</label><br>

            <h6 class="titulo-pag">PAGAMENTO</h6>
            <select class="forma-pag" name="pag" style="border: 1px solid black;background:gray;" name="pag" for="pag">
            <option value="crédito">Cartão de Crédito</option>
            <option value="débito">Cartão de Débito</option>
            <option value="dinheiro">Dinheiro</option>
            </select>
            <label for="troco" class="troco">Troco Para:</label>
            <select class="troco"  name="troco" style="border: 1px solid black;background:gray;" name="troco">
            <option value="$0">$0</option>
            <option value="$5">$5</option>
            <option value="$10">$10</option>
            <option value="$15">$15</option>
            <option value="$20">$20</option>
            <option value="$25">$25</option>
            <option value="$30">$30</option>
            <option value="$35">$35</option>
            <option value="$40">$40</option>
            <option value="$45">$45</option>
            <option value="$50">$50</option>
            </select>
            <button type="submit" class="botão" style="background:gray;border: 1px solid black;">REALIZAR PEDIDO</button>
        </fieldset>
    </form>

    <br>
    <table class="table">
        <thead>
            <tr>
                <th>CLIENTE</th>
                <th>ENDEREÇO</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
                <th>TAMANHO</th>
                <th>SABOR</th>
                <th>BORDA</th>
                <th>FORMA DE PAGAMENTO</th>
                <th>TROCO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sqlBusca = "SELECT * FROM tb_pedidos";
            $resultado = mysqli_query($conexao , $sqlBusca);
            $listaPedidos = [];

            while($pedido = mysqli_fetch_assoc($resultado)){
                $listaPedidos[] = $pedido;
            }
            foreach($listaPedidos as $pedido): ?>
                <tr>
                    <td><?php echo $pedido['nome'];?></td>
                    <td><?php echo $pedido['endereco'];?></td>
                    <td><?php echo $pedido['cidade'];?></td>
                    <td><?php echo $pedido['estado'];?></td>
                    <td><?php echo $pedido['tamanho'];?></td>
                    <td><?php echo $pedido['sabor'];?></td>
                    <td><?php echo $pedido['borda'];?></td>
                    <td><?php echo $pedido['pag'];?></td>
                    <td><?php echo $pedido['troco'];?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<script src="bootstrap-5/bootstrap.bundle.min.js"></script>
<script src="js/funcoes.js"></script> 
</body>
</html>