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
        <title>Atividade 11 - PHP: validar.php -> exibir as informações do Formulário de Cadastro</title>
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
                            <li class="active"><a href="#">Atividade 11</a></li>
                            <li><a href="sobre.html">Sobre</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main>
                <h1 class="titulo">Atividade 11 - PHP: validar.php -> exibir as informações do Formulário de Cadastro - 19/12/2017</h1>
                <div class="container-fluid atividade">
                    <h1>Cadastro</h1>
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
                    <form method="get" action="atividade11.php">
                        <fieldset id="dadosUsuario"><legend>Dados do Usuário</legend>
                            <div class="form-group">
                                <label for="iNome">Nome: </label>
                                <input class="form-control" type="text" name="nNome" id="iNome">
                            </div>
                            <div class="form-group">
                                <label for="iCpf">CPF: </label>
                                <input class="form-control" type="text" name="nCPF" id="iCpf">
                            </div>
                            <div class="form-group">
                                <label for="iRG">RG: </label>
                                <input class="form-control" type="text" name="nRG" id="iRG">
                            </div>
                            <fieldset><legend>Gênero</legend>
                                <label class="radio-inline"><input type="radio" name="nGenero" value="M">Masculino</label>
                                <label class="radio-inline"><input type="radio" name="nGenero" value="F">Feminino</label>
                                <label class="radio-inline"><input type="radio" name="nGenero" value="N">Não Binário</label>
                            </fieldset>
                            <fieldset><legend>Endereço</legend>
                                <div class="form-group">
                                    <label for="iEstado">Estado</label>
                                    <select class="form-control" name="nEstado" id="iEstado" >
                                        <option value="1">Minas Gerais</option>
                                        <option value="2">São Paulo</option>
                                        <option value="3">Espírito Santo</option>
                                        <option value="4">Rio de Janeiro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="iCidade">Cidade</label>
                                    <select class="form-control" name="nCidade" id="iCidade" >
                                        <option value="1">Belo Horizonte</option>
                                        <option value="2">João Monlevade</option>
                                        <option value="3">Campinas</option>
                                        <option value="4">Sete Lagos</option>
                                        <option value="5">Rio de Janeiro</option>
                                        <option value="6">São Paulo</option>
                                        <option value="7">Itabira</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="iBairro">Bairro</label>
                                    <input class="form-control" type="text" name="nBairro" id="iBairro" placeholder="Bairro">
                                </div>
                                <div class="form-group">
                                    <label for="iRua">Rua</label>
                                    <input class="form-control" type="text" name="nRua" id="iRua" placeholder="Rua">
                                </div>
                                <div class="form-group">
                                    <label for="iNumero">Número da residência</label>
                                    <input class="form-control" type="text" name="nNumero" id="iNumero" min="1" max="99999">
                                </div>
                                <div class="form-group">
                                    <label for="iComplemento">Complemento</label>
                                    <input class="form-control" type="text" name="nComplemento" id="iComplemento">
                                </div>
                            </fieldset>
                            <fieldset id="contato"><legend>Contato</legend>
                                <fieldset>
                                    <div class="form-group">
                                        <label for="iTelefone1">Telefone 1</label>
                                        <input class="form-control" type="text" name="nTelefone1" id="iTelefone1">
                                    </div>
                                    <label class="checkbox-inline"><input type="checkbox" name="nWhatsApp1">WhatsApp</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="nTelegran1">Telegran</label>
                                </fieldset>					
                                <fieldset>
                                    <div class="form-group">
                                        <label for="iTelefone2">Telefone 2</label>
                                        <input class="form-control" type="text" name="nTelefone2" id="iTelefone2">
                                    </div>
                                    <label class="checkbox-inline"><input type="checkbox" name="nWhatsApp2">WhatsApp</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="nTelegran2">Telegran</label>
                                </fieldset>
                            </fieldset>
                            <fieldset id="emai"><legend>E-Mail</legend>
                                <div class="form-group">
                                    <label for="iEmail">E-Mail</label>
                                    <input class="form-control" type="email" name="nEmail" id="iEmail">
                                </div>
                                <div class="form-group">
                                    <label for="iEmailCheck">Confirmar E-mail</label>
                                    <input class="form-control" type="email" name="nEmailCheck" id="iEmailCheck">
                                </div>
                                <div class="form-group">
                                    <label for="iSenha">Senha</label>
                                    <input class="form-control" type="password" name="nSenha" id="iSenha">
                                </div>
                                <div class="form-group">
                                    <label for="iSenhaCheck">Confirmar Senha</label>
                                    <input class="form-control" type="password" name="nSenhaCheck" id="iSenhaCheck">
                                </div>
                            </fieldset>
                        </fieldset>
                        <input class="btn btn-success" type="submit" value="Cadastrar">
                        <input class="btn btn-info" type="reset" value="Limpar">
                    </form>
                    <br>
                    <a class="btn btn-default" href="atividade10.html">Voltar</a>
                    <a class="btn btn-default" href="atividade12.php">Avançar</a>
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
