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
        <link rel="stylesheet" href="../Frameworks/bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" href="../Frameworks/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../estilo.css">
        <script src="../Frameworks/jquery-3.3.1.js"></script>
        <script src="../Frameworks/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="../JavaScript/IMCJQuery.js"></script>
        <title>Atividade 13 - PHP+MYSQL - lista de alunos, estados e cidades - apresentação em tabela/Bootstrap</title>
    </head>
    <body>
        <div class="container">
            <header>
                <img src="../Imagens/logo.png" alt="UFOP">
                <nav class="navbar navbar-default barraNav">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="../index.html">Página Principal</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Atividade 13</a></li>
                            <li><a href="../sobre.html">Sobre</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                <h1 class="titulo">Atividade 13 - PHP+MYSQL - lista de alunos, estados e cidades - apresentação em tabela/Bootstrap - 16/01/2017</h1>
                <div class="container-fluid atividade">
                    <br>
                    <pre>
                        @extends('layout.principal')
                        @section('conteudo')
                            &lt;h1&gt;Lista de alunos(as)&lt;/h1&gt;
                                &lt;div class="container-fluid table-responsive"&gt;
                                    &lt;table class="table table-hover table-striped"&gt;
                                        &lt;tr&gt;
                                            &lt;th&gt;ID&lt;/th&gt;
                                            &lt;th&gt;Nome&lt;/th&gt;
                                            &lt;th&gt;CEP&lt;/th&gt;
                                            &lt;th&gt;Cidade ID&lt;/th&gt;
                                            &lt;th&gt;Bairro&lt;/th&gt;
                                            &lt;th&gt;Rua&lt;/th&gt;
                                            &lt;th&gt;Número&lt;/th&gt;
                                            &lt;th&gt;E-Mail&lt;/th&gt;
                                        &lt;/tr&gt;
                                        @foreach($alunos as $aluno)
                                            &lt;tr&gt;
                                                &lt;td&gt;{{ $aluno-&gt;id }}&lt;/td&gt;
                                                &lt;td&gt;{{ $aluno-&gt;nome }}&lt;/td&gt;
                                                &lt;td&gt;{{ $aluno-&gt;cep }}&lt;/td&gt;
                                                &lt;td&gt;{{ $aluno-&gt;cidade_id }}&lt;/td&gt;
                                                &lt;td&gt;{{ $aluno-&gt;bairro }}&lt;/td&gt;
                                                &lt;td&gt;{{ $aluno-&gt;rua }}&lt;/td&gt;
                                                &lt;td&gt;{{ $aluno-&gt;numero }}&lt;/td&gt;
                                                &lt;td&gt;{{ $aluno-&gt;mail }}&lt;/td&gt;
                                            &lt;/tr&gt;
                                        @endforeach
                                    &lt;/table&gt;
                                &lt;/div&gt;
                        @endsection
                    </pre>
                    <a class="btn btn-default" href="../atividade12.php">Voltar</a>
                    <a class="btn btn-default" href="../atividade14/index.php">Avançar</a>
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
