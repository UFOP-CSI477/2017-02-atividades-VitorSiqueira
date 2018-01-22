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
        <title>Atividade 13 - PHP+MYSQL - lista de alunos, estados e cidades - apresentação em tabela/Bootstrap</title>
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
                            <li class="active"><a href="#">Atividade 13</a></li>
                            <li><a href="sobre.html">Sobre</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                <h1 class="titulo">Atividade 13 - PHP+MYSQL - lista de alunos, estados e cidades - apresentação em tabela/Bootstrap - 16/01/2017</h1>
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
                        
                    <br>
                    <a class="btn btn-default" href="atividade12.php">Voltar</a>
                    <a class="btn btn-default" href="#">Avançar</a>
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
