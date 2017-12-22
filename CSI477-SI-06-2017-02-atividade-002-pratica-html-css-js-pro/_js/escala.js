/*
 Aluno: Vitor de Siqueira Cotta
 Matrícula: 14.1.8143
 Disciplina: CSI477 - SISTEMAS WEB I - Turma 11
 Professor: FERNANDO BERNARDES DE OLIVEIRA
 Atividade: Atividade Prática 2 - HTML, CSS e JS
 Data: 17/12/2017
 */

/*ESCALA RICHTER*/

function calcularEscala() {
    var mag = parseFloat(Math.log10(parseFloat(document.dados.A.value)) + 3 * Math.log10(8 * (parseFloat(document.dados.deltaT.value))) - 2.92);
    
    if(!isNaN(mag)) {
    
    document.dados.M.value =  mag;
    
    if(mag < 3.5)
        document.dados.efeito.value = "Geralmente não sentido, mas gravado";
    else if(3.5 <= mag && mag <= 5.4)
        document.dados.efeito.value = "Às vezes sentido, mas raramente causa danos.";
    else if(5.5 <= mag && mag <= 6)
        document.dados.efeito.value = "No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas em regiôes prómagimas.";
    else if(6.1 <= mag && mag <= 6.9)
        document.dados.efeito.value = "Pode ser destrutivo em áreas em torno de até 100 km do epicentro.";
    else if(7 <= mag && mag <= 7.9)
        document.dados.efeito.value = "Grande terremoto. Pode causar sérios danos numa grande faimaga.";
    else
        document.dados.efeito.value = "Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros.";
    }
    else
        alert("Insira apenas números!");
}
