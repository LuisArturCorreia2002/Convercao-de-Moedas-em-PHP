<!--Os valores foram obtidos em 18/05/2021 ás 19:03--->
<?php
if(isset($_POST['converter'])) 
{
    $valor = $_POST['valor'];
    $moedaOrigem = $_POST['moedaOrigem'];
    $moedaDestino = $_POST['moedaDestino'];

    //Iniciando conversão do dolar americano para outras moedas
    if($moedaOrigem == 'Dolar Americano - USD$' and $moedaDestino == 'Euro - União Europeia') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 0.82;
    
    }
    if($moedaOrigem == 'Dolar Americano - USD$' and $moedaDestino == 'Dolar Canadense - CUSD') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 1.21;
    
    }
    if($moedaOrigem == 'Dolar Americano - USD$' and $moedaDestino == 'Real Brasileiro - BRL') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 5.26;
    
    } //Fim da conversão do Dolar

    //Início da conversão do Euro
    if($moedaOrigem == 'Euro - União Europeia' and $moedaDestino == 'Dolar Americano - USD$') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 1.22;
    
    }
    if($moedaOrigem == 'Euro - União Europeia' and $moedaDestino == 'Dolar Canadense - CUSD') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 1.47;
    
    }
    if($moedaOrigem == 'Euro - União Europeia' and $moedaDestino == 'Real Brasileiro - BRL') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 6.43;
    
    } //Fim da conversão do Euro

    
    //Início da conversão do Dolar Cnadense
    if($moedaOrigem == 'Dolar Canadense - CUSD' and $moedaDestino == 'Dolar Americano - USD$') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 0.83;
    
    }
    if($moedaOrigem == 'Dolar Canadense - CUSD' and $moedaDestino == 'Euro - União Europeia') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 0.68;
    
    }
    if($moedaOrigem == 'Dolar Canadense - CUSD' and $moedaDestino == 'Real Brasileiro - BRL') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 4.36;
    
    } //Fim da conversão do Dolar Cnadense


        
    //Início da conversão do Real Brasileiro
    if($moedaOrigem == 'Real Brasileiro - BRL' and $moedaDestino == 'Dolar Americano - USD$') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 5.26;
    
    }
    if($moedaOrigem == 'Real Brasileiro - BRL' and $moedaDestino == 'Euro - União Europeia') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 6.43;
    
    }
    if($moedaOrigem == 'Real Brasileiro - BRL' and $moedaDestino == 'Dolar Canadense - CUSD') {
        echo "<p>Seu valor é: </p>";
        echo $valor * 4.36;
    
    } //Fim da conversão do Real Brasileiro

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Câmbio - Muito Dinheiro</title>
</head>
<body>
    <form action="index.php" method="post">
    
    <table>
        <tr>
            <td colspan="4"><h3>Calculadora de Câmbio - Muito Dinheiro</h3></td>
        </tr>
        <tr>
            <td><b>Digite o valor: </b></td>
            <td>
                <input type="text" name="valor" placeholder="Digite o valor que deseja converter"/>
            </td>
        </tr>
        <tr>
            <td><b>Moeda de Origem</b></td>
            <td>
                <select name="moedaOrigem">
                    <option>Selecione uma das moedas abaixo: </option>
                    <option>Dolar Americano - USD$</option>
                    <option>Dolar Canadense - CUSD</option>
                    <option>Real Brasileiro - BRL</option>
                    <option>Euro - União Europeia</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><b>Moeda de Destino</b></td>
            <td>
                <select name="moedaDestino">
                    <option>Selecione uma das moedas abaixo: </option>
                    <option>Euro - União Europeia</option>
                    <option>Dolar Canadense - CUSD</option>
                    <option>Real Brasileiro - BRL</option>
                    <option>Dolar Americano - USD$</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="converter" value="Converter valor"/>
             </td>
        </tr>
    </table>
    
    </form>
</body>
</html>