<!DOCTYPE html>
<!-- Isto é um comentário -->
<html>
    <head>
        <title>Aprendendo HTML</title>
        <!-- Indica qual o código dos caracteres da página -->
        <meta charset="UTF-8">

        <!-- Incluindo o estilo diretamente na página -->
        <style type="text/css">
            body {
                font-family: "Times New Roman", Times, serif;
                font-size: 24px;
            }

            h1 {
                font-style: italic;
                font-weight: bold;
            }

            /*  Isso é um ID (identificador), pois é iniciado com um # Sharp 
                Identifica apenas UM elemento e deve ser ÚNICO
                #exemplo_id{}
            */
            #caixa_1{
                border: solid 2px #000;
                width: 500px;
                margin-left: 200px;
            }

            /*  Isso é uma classe, pois é iniciada com um ponto 
                Identifica um GRUPO de ELEMENTOS no documento
                .exemplo_classe{}
            */
            .destaque_negrito{
                font-weight: bold;
            }

            .destaque_italico{
                font-style: italic;
            }

            .espacos{
                letter-spacing: 10px;
            }

            span {
                font-size: 20px;
                color: coral;
                border: solid 1px;
            }

            .caixa_2{
                text-align: justify;
                margin: 30px;
                border: solid 2px #000;
                padding: 20px;
                width: 500px;
            }
        </style>
    </head>
    <!-- 
        Aqui começa o corpo do HTML, onde irão os textos que 
        serão mostrados no navegador -->
    <body>
        <h1>Universidade Nove de Julho</h1>
        <h2>Cursos Presenciais e em EaD</h2>
        <h3>Mestrados e Doutorados</h3>
        <h4>Informações: <a href="http://www.uninove.br">www.uninove.br</a></h4>

        <p>Neste parágrafo, o texto está escrito sem nenhum tipo de formatação</p>
        <p>Já, neste parágrafo, existe um <span>DESTAQUE</span> está vendo?</p>
        <p class="destaque_italico">Este aqui está todo em itálico!</p>
        <p class="destaque_negrito">Este aqui está todo NEGRITO!</p>
        <p class="espacos">Ah, nesse aqui as letras estão com um espaço maior entre elas!</p>

        <div id="caixa_1">
            <p>Veja que existe uma borda em volta do texto e que também está afastado da margem da página.</p>
        </div>

        <div class="caixa_2">
            <p>
                Aqui o fundo já tem outra cor, além do texto estar afastado das 
                margens internas da caixa! Também é possível notar o texto
                justificado.
            </p>
        </div>
    </body>
</html>
