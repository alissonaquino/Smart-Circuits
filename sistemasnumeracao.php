<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilodocumentacao/documentacao.css">
    <title>Smart Circuits | Documentações</title>
</head>
<body>
<div>
        <a href="home.php">< Voltar ao site</a>
    </div>
    <section class="parte01">
        <h1>Seja bem vindo a nossa documentação de estudos</h1>
        <h2>Para darmos inicio aos estudos de Circuitos Lógicos devemos primeira mente entender como funciona o sistema de numeração em sistemas digitais.</h2>
        <h3>Pequena introdução</h3>
        <p>Computador: sinais elétricos <br>
            Números formados por 0s e 1s <br>
            ...0010110011001011110110111000b
        </p>
        <h3>Por exemplo o que significa 1101101b</h3>
        <img src="imagens/imagem1.png" alt="img1">
        <img src="imagens/imagem2.png" alt="img1">
        <img src="imagens/imagem3.png" alt="img1">
        <img src="imagens/imagem4.png" alt="img1">
        <img src="imagens/imagem5.png" alt="img1">
        <h2>Representações Numericas</h2>
        <p>Números: representações convenientes para as quantidades
        </p>
        <img src="imagens/imagem6.png" alt="">
        <p>
            O Conjunto 1 possui 5 bolinhas
            <br> O Conjunto 2 possui 15 bolinhas
        </p>
        <p>Essa não é a única forma de representarmos, existem outras formas:
             Representação decimal com numerais 
             <br>
             Hindu-arábicos
             <br>
             Numerais romanos
            </p>
            <img src="imagens/imagem7.png" alt="img7">
            <p>Contagem de 0 a 15 em várias bases
            </p>
            <img src="imagens/imagem8.png" alt="img8">
            <p> Algumas representações se mostraram inadequadas para realizar cálculos
                <br>
                Assim, foram substituídas pela base decimal com numerais hindu-arábicos...
                <br>
                Por que base decimal? Bem, temos 10 dedos nas mãos, e podemos contar até 10 com eles...
                <br>
               ...essa é a base natural dos seres humanos
               </p>
               <p>No caso dos computadores...
                Temos de representar números com fios <br>
                Um fio tem 2 estados
                Passa corrente...
                <br>
                ...ou não passa corrente
                <br>
                
                
                Podemos definir este processo como representação binária
                Cada dígito binário, chamado bit, é representado por um fio no circuito
                </p>
                <img src="imagens/imagem9.png" alt="img9">
                <p>Base: indica quantos símbolos há por dígito
                    <br>
                    Quanto menor a base maior o número de dígitos
                </p>
                <img src="imagens/imagem10.png" alt="img10">
                <p>Em eletrônica, é comum usar notação hexadecimal <br>
                    Por exemplo, um mouse está na porta “2F8” (em hexadecimal) <br>
                    2F8 (em hexa) é o mesmo que 1011111000 (em  binário) <br>
                    Veremos essas conversões em uma aula futura! <br>
                   Isso significa que, para acionar o mouse, precisamos acionar os seguintes fios:
                   </p>
                   <img src="imagens/imagem11.png" alt="img11">
                   <p>
                    Números decimais:
                    5, 30, 44 <br>
                    Números binários: com um b ao final: 
                    101b, 11110b, 101100b
                    <br>
                    Números octais: com um ZERO à esquerda:
                    05, 036, 054
                    <br>
                    Números Hexadecimais: com h ao final ou 0x na frente:
                    5h, 1Eh, 2Ch		OU		0x5, 0x1E, 0x2C
                   </p>
                   <h2>Notação binária</h2>
                   <p>Como visto anteriormente, os números são representados pelo estado elétrico dos fios
                    Um fio tem 2 estados
                    <br>
                    Passa corrente...
                    <br>
                    ...ou não passa corrente
                    <br>
                    Cada fio representa um dígito binário, chamado bit. Um bit tem 2 valores possíveis: 0 e 1.
                    </p>
                    <p>
                        Com 2 bits representa-se...
                        <br>
                        00b, 01b, 10b, 11b... 4 valores.
                        <br>
                    Com 3 bits...
                    <br>
                        000b, 001b, 010b, 011b, 100b, 101b, 110b, 111b... 8 valores
                        <br>
                    Com 4 bits...
                    <br>
                        0000b, 0001b, 0010b, 0011b, 0100b, 0101b, 0110b, 0111b,
                        1000b, 1001b, 1010b, 1011b, 1100b, 1101b, 1110b, 1111b...
                        <br>
                        ...são 16 valores
                        <br>
                    Número de bits = número de dígitos binários
                    </p>
                    <p>
                        Determinados grupos de bits recebem nomes especiais:
                        <br>
                        4 bits: Nibble
                        <br>
                        8 bits: Byte
                        <br>
                        16 bits: Word (palavra)
                        <br>
                        32 bits: Dword (Double Word ou palavra dupla)
                        <br>
                        64 bits: Qword (Quad Word ou palavra quádrupla)
                        <br>
                    </p>
                    <p>
                        Quantos valores represento com n bits?
                        <br>
                         Número de valores = 2n
                        <br>
                        Exemplo:
                        <br>
                         8 bits   → 28  = 256
                         <br>
                         10 bits → 210 = 1024
                         <br>
                         16 bits → 216 = 65.536
                         <br>
                         32 bits → 232 = 4.294.967.296
                         <br>
                    </p>
                    <h2>Conversão Decimal / Binário</h2>
                    <p>Regra Prática:
                        <br>
                        Divida o número sucessivamente por 2, construindo o número binário da direita para a esquerda
                        <br>
                        Se a divisão for exata, acrescente 0 à esquerda do número binário
                       <br>
                        Se a divisão for “quebrada”, acrescente 1 à esquerda do número binário e descarte a parte fracionária
                       <br>
                        Repita até que o valor a dividir seja 0
                       </p>
                       <p>
                        Regra Prática:  
                        <br>
                        Converter 192 em Binário
                        <br>
                        Converter 19 em Binário

                       </p>
                       <img src="imagens/imagem12.png" alt="img12">
                    <h2>Conversão Binário / Hexadecimal</h2>
                    <p>
                        Regra Prática:
                        <br>
                        Vamos converter 101011b para decimal
                        <br>
                        Regra prática: construa essa tabela
                    </p>
                    <img src="imagens/imagem13.png" alt="img13">
                    <img src="imagens/imagem14.png" alt="img14">
                    <img src="imagens/imagem15.png" alt="img15">
                    <h2>Conversão Decimal fracionário / Binário</h2>
                    <p>
                        Regra Prática:  
<br>
Passo 1: Converter a parte inteira, conforme processo visto anteriormente
<br>
Passo 2: Converter a parte fracionária por multiplicações sucessivas por 2, até conseguir uma precisão satisfatória e, então, parar.
<br>
Passo 3: Ao final, juntar as partes inteira e fracionária.

                    </p>
                    <img src="imagens/imagem16.png" alt="img16">
                    <img src="imagens/imagem17.png" alt="img17">
                    <img src="imagens/imagem18.png" alt="img18">
                    <p>
                        <a href="https://www.youtube.com/watch?v=PXn4gOjzifA
                        ">Vídeo auxiliar para esta conversão, Clique aqui!</a>
                    </p>
                    <h2>Conversão Decimal / Binário</h2>
                    <p>Regra Prática:  
                        <br>
                        Converter 192 em Binário
                        <br>
                        Converter 19 em Binário
                        </p>
                        <img src="imagens/imagem19.png" alt="img19">
                        <h2>Conversão Binário / Decimal</h2>
                        <p>
                            Regra Prática:
                            <br>
                            Vamos converter 101011b para decimal
                            <br>
                            Regra prática: construa essa tabela

                        </p>
                        <img src="imagens/imagem20.png" alt="img20">
                        <img src="imagens/imagem21.png" alt="img21">
                        <h2>Conversão Decimal / Octal</h2>
                        <p>
                            Regra Prática:  
                            <br>
                            Converter 192 em Octal
                            <br>
                            Converter 19 em Octal

                        </p>
                        <img src="imagens/imagem22.png" alt="img22">
                        <h2>Conversão Decimal / Hexadecimal</h2>
                        <p>
                            Regra Prática: 
                            <br> 
                            Converter 192 em Hexa
                            <br>
                            Converter 19 em Hexa

                        </p>
                        <img src="imagens/imagem23.png" alt="img23">
                        <img src="imagens/imagem24.png" alt="img24">
                        <h2>Conversão binário / Octal ou Hexadecimal</h2>
                        <img src="imagens/imagem25.png" alt="img25">
                        <h2>Conversão Octal ou Hexadecimal / Binário</h2>
                        <p>A conversão inversa de octal ou hexadecimal para binário deve ser feita a partir da representação binária de cada algarismo do número.
                        </p>
                        <img src="imagens/imagem26.png" alt="img26">
                        <h2>Conversão qualquer base / Decimal</h2>
                        <p>
                            Sempre será utilizado a Notação Posicional.

                        </p>
                        <img src="imagens/imagem27.png" alt="img27">
                        <h3>Abaixo a tabela ASCII </h3>
                        <img src="imagens/asctable.png" alt="tableasc">
    </section>
    <div>
        <a href="sistemaslogicos.php">Dar continuidade ></a>
    </div>
</body>
</html>