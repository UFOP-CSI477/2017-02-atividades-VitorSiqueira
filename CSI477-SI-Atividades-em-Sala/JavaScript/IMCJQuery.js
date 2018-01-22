$(function () {
    $("#calcular").click(function () {
        var peso = parseFloat($("#valor1").val());
        var altura = parseFloat($("#valor2").val());
        altura /= 100;

        if (isNaN(peso)) {
            $("#grupoV1").addClass(".has-error");
            $("#alertaV1").show();
            $("#valor1").val("");
            $("#valor1").focus();
            return;
        }
        $("#grupoV1").removeClass(".has-error");
        $("#alertaV1").hide();
        
        if (isNaN(altura)) {
            $("#grupoV2").addClass(".has-error");
            $("#alertaV2").show();
            $("#valor2").val("");
            $("#valor2").focus();
            return;
        }
        $("#grupoV2").removeClass(".has-error");
        $("#alertaV2").hide();

        if(isNaN(peso / (altura * altura)))
            return;
        
        var resultado = peso / (altura * altura);
        
        $("#resultado").val(resultado);

        var pesoMin = (altura * altura) * 18.6;
        var pesoMax = (altura * altura) * 24.9;

        $("#pesoMin").val(pesoMin);
        $("#pesoMax").val(pesoMax);

        $("#alertaV3").hide();

        if (resultado < 17) {
            $("#alertaV3").show();
            $("#classificacao").val("Muito abaixo do peso");
            $("#classificacao").focus();
            return;
        } else if (resultado >= 17 && resultado < 18.5) {
            $("#classificacao").val("Abaixo do peso");
            $("#classificacao").focus();
            return;
        } else if (resultado >= 18.5 && resultado < 25) {
            $("#classificacao").val("Peso normal");
            $("#classificacao").focus();
            return;
        } else if (resultado >= 25 && resultado < 30) {
            $("#classificacao").val("Acima do peso");
            $("#classificacao").focus();
            return;
        } else if (resultado >= 30 && resultado < 35) {
            $("#alertaV3").show();
            $("#classificacao").val("Obesidade I (mórbida)");
            $("#classificacao").focus();
            return;
        } else if (resultado >= 35 && resultado < 40) {
            $("#alertaV3").show();
            $("#classificacao").val("Obesidade II (mórbida)");
            $("#classificacao").focus();
            return;
        } else if (resultado >= 40) {
            $("#alertaV3").show();
            $("#classificacao").val("Obesidade III (mórbida)");
            $("#classificacao").focus();
            return;
        }
    });
});