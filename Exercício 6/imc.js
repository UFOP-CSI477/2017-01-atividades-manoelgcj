$(document).ready(function(){

  $("button[name='calculo']").click(function(){
    var n1 = parseFloat($("input[name='n1']").val());
    var n2 = parseFloat($("input[name='n2']").val());

    var nome = $("input[name='nome']").val();
    var idade = $("input[name='idade']").val();

// N1
    if (isNaN(n1)){
      $("#grupoN1").addClass("has-error");
      $("#alertN1").slideDown();
      //Outras formas:   $("#alertN1").show();
      //                 $("#alertN1").fideIn(3000);
      $("input[name='n1']").val("");
      $("input[name='n1']").focus();
      return;
    }

    $("#grupoN1").removeClass("has-error");
    $("#alertN1").hide();

// N2
    if (isNaN(n2)){
      $("#grupoN2").addClass("has-error");
      $("#alertN2").slideDown();
      $("input[name='n2']").val("");
      $("input[name='n2']").focus();
      return;
    }

    $("#grupoN2").removeClass("has-error");
    $("#alertN2").hide();

    var res = parseFloat(n1) / ((parseFloat(n2)/100) * (parseFloat(n2)/100));

    $("input[name='resultado']").val(nome+": "+idade+" anos - IMC -> "+res);

    if (res < 18.5){
      $("input[name='classificacao']").val("ABAIXO DO PESO !!!");
    }else if (res < 24.9){
      $("input[name='classificacao']").val("PESO NORMAL !!!");
    }else if (res < 29.9){
      $("input[name='classificacao']").val("SOBREPESO !!!");
    }else if (res < 34.9){
      $("input[name='classificacao']").val("OBESIDADE GRAU I !!!");
    }else if (res < 39.9){
      $("input[name='classificacao']").val("OBESIDADE GRAU II !!!");
    }else
      $("input[name='classificacao']").val("OBESIDADE GRAU III OU MÓRBIDA !!!");

  });

});
