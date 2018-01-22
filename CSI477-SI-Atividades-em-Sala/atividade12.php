<!--
Aluno: Vitor de Siqueira Cotta
Matrícula: 14.1.8143
Disciplina: CSI477 - SISTEMAS WEB I - Turma 11
Professor: Fernando Bernardes de Oliveira
Atividades
Data: ##/##/2018
-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Vitor de Siqueira Cotta">
        <link rel="stylesheet" href="Frameworks/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" href="Frameworks/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="estilo.css">
        <script src="Frameworks/jquery-3.3.1.js"></script>
        <script src="Frameworks/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="JavaScript/IMCJQuery.js"></script>
        <title>Atividade 12 - Cálculo IMC - HTML/Boostrap/PHP</title>
    </head>
    <body>
        <div class="container">
            <header>
                <img src="Imagens/logo.png" alt="UFOP">
                <nav class="navbar navbar-default barraNav">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">Página Principal</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Atividade 12</a></li>
                            <li><a href="sobre.html">Sobre</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                <h1 class="titulo">Atividade 12 - Cálculo IMC - HTML/Boostrap/PHP - 21/12/2017</h1>
                <div class="container-fluid atividade">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            GET PHP
                        </div>
                        <div class="panel-body">
                            <?php
                            var_dump($_GET);
                            ?>
                        </div>
                    </div>
                    <form method="get" action="atividade12.php" name="dados">
                        <div id="grupoV1" class="form-group">
                            <label for="valor1">Informe seu peso em KG</label>
                            <input name="valor1" id="valor1" type="text" class="form-control">
                            <div class="alert alert-danger" style="display: none" id="alertaV1">
                                Informe seu peso com valores válidos.
                            </div>
                        </div>
                        <div id="grupoV2" class="form-group">
                            <label for="valor2">Informe sua altura em CM</label>
                            <input name="valor2" id="valor2" type="text" class="form-control">
                            <div class="alert alert-danger" style="display: none" id="alertaV2">
                                Informe sua altura com valores válidos.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resultado">Resultado</label>
                            <input name="resultado" id="resultado" type="text" class="form-control" readonly>
                        </div>
                        <div id="grupoV3" class="form-group">
                            <label for="classificacao">Classificação</label>
                            <input name="classificacao" id="classificacao" type="text" class="form-control" readonly>
                            <div class="alert alert-danger" style="display: none" id="alertaV3">
                                Seu peso não está ideal.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pesoMin">Peso mínimo ideal</label>
                            <input name="pesoMin" id="pesoMin" type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pesoMax">Peso máximo ideal</label>
                            <input name="pesoMax" id="pesoMax" type="text" class="form-control" readonly>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" id="calcular">Calcular IMC</button>
                            <button type="submit" class="btn btn-primary" id="calcular">Enviar</button>
                            <button type="reset" class="btn btn-primary">Limpar</button>
                        </div>
                    </form>
                    <img src="Imagens/pesoIdeal.png" style="width: auto;" alt="Tabela com intervalo de pesos e grau de risco.">
                    <br>
                    <a class="btn btn-default" href="atividade11.php">Voltar</a>
                    <a class="btn btn-default" href="atividade13.php">Avançar</a>
                </div>
            </main>
            <footer>
                Universidade Federal de Ouro Preto <br>
                Aluno: Vitor de Siqueira Cotta <br>
                Matrícula: 14.1.8143 <br>
                E-mail: Vithorkross@outlook.com <br>
            </footer>
        </div>
    </body>
</html>
