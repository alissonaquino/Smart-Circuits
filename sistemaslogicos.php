<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilodocumentacao/documentacao.css">
    <title>Smart Circuits | Circuitos Lógicos</title>
</head>
<body>
    <div>
<a href="sistemasnumeracao.php">< Voltar </a>
</div>
    <section class="parte01">
        <h1>Portas Lógicas</h1>
        <h2>Porta Lógica AND</h2>
        <p>A porta lógica AND é geralmente composta por duas entradas binárias, <br> saída apenas será igual a 1 caso ambas as entradas (A e B) tenham 1, <br>conforme mostrado na tabela da verdade abaixo:</p>
        <br>
        <img src="imagensUA2/img9.png" alt="img9">
        <br>
        <p>O símbolo mais adotado e utilizado para representar uma porta lógica AND é a seguinte:</p>
        <br>
        <img src="imagensUA2/img10.png" alt="img10">
        <br>
        <p>Abaixo estão todas as possibilidades de entradas e saídas para a porta lógica AND com duas entradas:</p>
        <br>
        <img src="imagensUA2/img11.png" alt="img11">
        <br>
        <img src="imagensUA2/img12.png" alt="img12">
        <br>
        <p>É possível utilizar inúmeras entradas para uma porta lógica AND, contudo <br>a quantidade de possíveis saídas dependendo das entradas binárias será <br>exponencialmente maior conforme irá adicionando mais e mais entradas.</p>
        <br>
        <img src="imagensUA2/img13.png" alt="img13">
        <br>
        <p>Para calcular a quantidade de saídas possíveis em relação ao número de <br>entradas, basta utilizar a fórmula S = 2^n, onde S é a quantidade final de <br>saídas e n é a quantidade de entradas que a porta lógica irá receber.</p>
        <br>
        <p>Abaixo está a tabela da verdade com todas as possibilidades de <br>saídas de uma porta lógica AND possuindo quatro entradas:</p>
        <br>
        <img src="imagensUA2/img14.png" alt="img14">
        <br>
        <h2>Porta Lógica OR</h2>
        <p>A porta lógica OR, por sua vez, adota uma lógica menos restritiva <br>que a anterior. Dessa vez, se alguma das entradas obtiverem 1 <br>como valor, a sua saída portanto será igual a 1.</p>
        <br>
        <img src="imagensUA2/img15.png" alt="img15">
        <br>
        <p>Esta é a representação mais clássica e utilizada de uma porta lógica OR:</p>
        <br>
        <img src="imagensUA2/img16.png" alt="img16">
        <br>
        <p>Novamente, aqui estão todas as possibilidades de saídas de <br>uma porta lógica contendo duas entradas binárias:</p>
        <br>
        <img src="imagensUA2/img17.png" alt="img17">
        <br>
        <img src="imagensUA2/img18.png" alt="img18">
        <br>
        <p>O mesmo princípio do cálculo de saídas em relação as entradas <br>se aplica para todas as portas lógicas. Quanto mais entradas, <br>mais saídas serão possíveis.</p>
        <br>
        <img src="imagensUA2/img19.png" alt="img19">
        <br>
        <p>Aqui estão todas as possibilidades de saídas com quatro entradas binárias de uma porta lógica OR:</p>
        <br>
        <img src="imagensUA2/img20.png" alt="img20">
        <br>
        <h2>Porta Lógica NOT</h2>
        <p>A porta lógica NOT possui uma lógica de funcionamento diferente das demais, <br>pois ela só admite uma entrada para a computação de sua saída final.</p>
        <br>
        <img src="imagensUA2/img21.png" alt="img21">
        <br>
        <p>Se a entrada for 1, a saída retornará 0. Caso contrário, a saída retornará 1 com <br>uma entrada equivalente a 0, ou seja, ela sempre inverte o valor da entrada.</p>
        <br>
        <img src="imagensUA2/img22.png" alt="img22">
        <br>
        <h2>Porta Lógica NAND</h2>
        <p>A porta lógica NAND funciona quase igual a porta lógica AND, porém <br>ela adota a lógica da porta lógica NOT, ou seja, quando ambas as <br>entradas forem igual a 1, ela retornará como saída 0 ao invés de 1, <br>e quando alguma das entradas serem 0, retornará 1 como saída.</p>
        <br>
        <img src="imagensUA2/img23.png" alt="img23">
        <br>
        <p>Esta é a representação mais clássica e utilizada de uma porta lógica NAND:</p>
        <br>
        <img src="imagensUA2/img24.png" alt="img24">
        <br>
        <img src="imagensUA2/img25.png" alt="img25">
        <br>
        <h2>Porta Lógica NOR</h2>
        <p>Assim como explicado na porta lógica anterior, o NOR se baseia <br>do mesmo princípio da porta lógica OR, mas todas as saídas <br>serão invertidas em relação ao OR, conforme ilustrado abaixo:</p>
        <br>
        <img src="imagensUA2/img26.png" alt="img26">
        <br>
        <p>Esta é a representação mais clássica e utilizada de uma porta lógica NOR:</p>
        <br>
        <img src="imagensUA2/img27.png" alt="img27">
        <br>
        <img src="imagensUA2/img28.png" alt="img28">
        <br>
        <h2>Porta Lógica XOR</h2>
        <p>Esta porta lógica atua na lógica de exclusividade, significando que ela só <br>retornará 1 caso não haja repetição entre as entradas binárias. Se, por <br>exemplo, ambas as entradas forem 0 ou 1, a saída equivalerá a 0, pois não <br>há exclusividade e houve repetição de dois valores binários iguais.</p>
        <br>
        <img src="imagensUA2/img29.png" alt="img29">
        <br>
        <p>Esta é a representação mais clássica e utilizada de uma porta lógica XOR:</p>
        <br>
        <img src="imagensUA2/img30.png" alt="img30">
        <br>
        <h3>ADENDO: A porta lógica XOR só admitirá somente duas entradas <br>para seu funcionamento, pois caso haja mais ou menos entradas, <br>não haverá aplicabilidade de sua lógica interna de exclusividade.</h3>
        <br>
        <h2>CIRCUITOS LÓGICOS</h2>
        <p>Depois de aprender as principais portas lógicas existentes no funcionamento <br>de um computador, existe também a combinação de todas essas portas lógicas <br>em um circuito lógico. Veja, por exemplo, um circuito lógico formado por portas <br>lógicas AND e OR abaixo:</p>
        <br>
        <img src="imagensUA2/img31.png" alt="img31">
        <br>
        <p>Para entender melhor o circuito lógico dado, é necessário <br>dividi-lo em duas partes: A primeira separando a porta <br>lógica AND, e a segunda separando a porta lógica OR.</p>
        <br>
        <img src="imagensUA2/img32.png" alt="img32">
        <br>
        <p>Primeiramente, observa-se que as entradas A e B são utilizadas <br>em uma porta lógica AND, gerando a expressão: S1 = A . B . Em <br>relação ao OR, apenas a entrada C e a saída da porta lógica AND <br>entrará no processamento da saída final do circuito lógico todo, <br>formado pela expressão: S = S1 + C.</p>
        <br>
        <img src="imagensUA2/img33.png" alt="img33">
        <br>
        <p>Conclui-se portanto, que a saída final do circuito lógico receberá <br>a fórmula: S = (A . B) + C. Aqui houve uma pequena mudança em <br>relação a fórmula anterior analisada, pois ao invés "S = S1 + C", <br>trocou-se S1 pelo seu valor de igualdade (S1 = A . B).</p>
        <br>
        <img src="imagensUA2/img35.png" alt="img35">
        <br><br>
    </section>
    <div>
        <h1>FIM DOS ESTUDOS DE CIRCUITOS LÓGICOS</h1>
    </div>
    <div>
    <a href="home.php">< Voltar ao site</a>
    </div>
    </section>
</body>
</html>