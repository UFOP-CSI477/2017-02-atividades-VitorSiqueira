/*
Aluno: Vitor de Siqueira Cotta
Matrícula: 14.1.8143
Disciplina: CSI477 - SISTEMAS WEB I - Turma 11
Professor: FERNANDO BERNARDES DE OLIVEIRA
Atividade: Calcular IMC
Data: 08/12/2017
*/
function calcularIMC()
{
  var peso   = parseFloat(document.dados.valor1.value);
  var altura = parseFloat(document.dados.valor2.value);
  altura /= 100;

  if(document.dados.valor1.value.length == 0 || isNaN(peso))
  {
    document.getElementById("grupoV1").classList.add("has-error");
    document.getElementById("alertaV1").style.display = "block";
    document.dados.valor1.value = "" ;
    document.dados.valor1.focus();
    return;
  }

  document.getElementById("grupoV1").classList.remove("has-error");
  document.getElementById("alertaV1").style.display = "none";

  if (document.dados.valor2.value.length == 0 || isNaN(altura))
  {
    document.getElementById("grupoV2").classList.add("has-error");
    document.getElementById("alertaV2").style.display = "block";
    document.dados.valor2.value = "" ;
    document.dados.valor2.focus();
    return;
  }
  
  document.getElementById("grupoV2").classList.remove("has-error");
  document.getElementById("alertaV2").style.display = "none";
  
  var resultado = peso / (altura*altura);
  document.dados.resultado.value = resultado;

  var pesoMin = (altura*altura)*18.6;
  var pesoMax = (altura*altura)*24.9;

  document.dados.pesoMin.value = pesoMin;
  document.dados.pesoMax.value = pesoMax;

  document.getElementById("grupoV3").classList.remove("alert-warning");
  document.getElementById("grupoV3").classList.remove("alert-danger");
  document.getElementById("grupoV3").classList.remove("alert-success");
  document.getElementById("alertaV3").style.display = "none";

  
  if(resultado <= 17)
  {
    document.getElementById("grupoV3").classList.add("alert-danger");
    document.getElementById("alertaV3").style.display = "block";
    document.dados.classificacao.value = "Muito abaixo do peso";
    document.dados.classificacao.focus();
    return;
  }
  else if(resultado >= 17.1 && resultado <= 18.5)
  {
    document.getElementById("grupoV3").classList.add("alert-warning");
    document.getElementById("alertaV3").style.display = "block";
    document.dados.classificacao.value = "Abaixo do peso";
    document.dados.classificacao.focus();
    return;
  }
  else if(resultado >= 18.6 && resultado <= 24.9)
  {
    document.getElementById("grupoV3").classList.add("alert-success");
    document.dados.classificacao.value = "Peso normal";
    document.dados.classificacao.focus();
    return;
  }
  else if(resultado >= 25 && resultado <= 29.9)
  {
    document.getElementById("grupoV3").classList.add("alert-warning");
    document.getElementById("alertaV3").style.display = "block";
    document.dados.classificacao.value = "Acima do peso";
    document.dados.classificacao.focus();
    return;
  }
  else if(resultado >= 30 && resultado <= 34.9)
  {
    document.getElementById("grupoV3").classList.add("alert-danger");
    document.getElementById("alertaV3").style.display = "block";
    document.dados.classificacao.value = "Obesidade 1";
    document.dados.classificacao.focus();
    return;
  }
  else if(resultado >= 35 && resultado <= 39.9)
  {
    document.getElementById("grupoV3").classList.add("alert-danger");
    document.getElementById("alertaV3").style.display = "block";
    document.dados.classificacao.value = "Obesidade II (severa)";
    document.dados.classificacao.focus();
    return;
  }
  else if(resultado >= 40)
  {
    document.getElementById("grupoV3").classList.add("alert-danger");
    document.getElementById("alertaV3").style.display = "block";
    document.dados.classificacao.value = "Obesidade III (mórbida)";
    document.dados.classificacao.focus();
    return;
  }
}