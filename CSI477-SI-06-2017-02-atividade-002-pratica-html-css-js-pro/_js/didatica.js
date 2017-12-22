/*
 Aluno: Vitor de Siqueira Cotta
 Matrícula: 14.1.8143
 Disciplina: CSI477 - SISTEMAS WEB I - Turma 11
 Professor: FERNANDO BERNARDES DE OLIVEIRA
 Atividade: Atividade Prática 2 - HTML, CSS e JS
 Data: 17/12/2017
 */

/*DIDÁTICA*/

var fig;
var btn;

function cliqueFig(x) {
    if (fig)
        fig.classList.remove("selecionado");

    fig = x;
    fig.classList.add("selecionado");

    if (fig && btn)
        checarFormas();
}

function cliqueBtn(x) {
    if (btn)
        btn.classList.remove("selecionado");

    btn = x;
    btn.classList.add("selecionado");

    if (fig && btn)
        checarFormas();
}

function checarFormas() {
    if (fig.id === 'figCir' && btn.id === 'btnCir')
        ativar();
    else if (fig.id === 'figQua' && btn.id === 'btnQua')
        ativar();
    else if (fig.id === 'figRet' && btn.id === 'btnRet')
        ativar();
    else if (fig.id === 'figTri' && btn.id === 'btnTri')
        ativar();
}

function ativar() {
    fig.classList.remove("selecionado");
    btn.classList.remove("selecionado");

    fig.classList.add("correto");
    btn.classList.add("correto");
}

function cliqueImagemCorreto(x) {
    x.classList.add("correto");
}

function cliqueImagemIncorreto(x) {
    if (x.className === "img-circle incorreto")
        x.classList.remove("incorreto");
    else
        x.classList.add("incorreto");
}