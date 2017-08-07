(function(){

  //pega o valor do input com id e retorna uma string no id do segundo parâmetro
  app.getRangeValue('#pageviewsQtd', '#visualizacoes');

  /* monitora a alteração de valores no input[range] e faz as alterações de background,
     filtra as linhas da tabela e aplica as classes ao elemento atual
  */
  $('#pageviewsQtd').on('input',function(){
      var pageviews = $(this).val();
      //captura os valores contidos na primeira coluna da tabela e compara com o valor atual do input[range] para filtrar a tabela
      $('tr td:first-child').each(function(index){
          var valor = app.convertInteger($(this).text());
              //se a qtd de pageviews escolhida for maior que q qtd da linha[coluna] atual, apaga a linha inteira e passa para a próxima
              if(pageviews > valor){                  
                  if ($(this).text() != "Infinitas impressões") {
                    if (valor == 200000) {
                      if (pageviews > 230000) {
                        $(this).parent().fadeOut(500);
                        $(this).parent().removeClass('linha-ativa');
                        $(this).parent().next().addClass('linha-ativa'); //add a classe linha ativa para o próximo item da tabela
                      }
                    } else {                      
                      $(this).parent().fadeOut(500);
                      $(this).parent().removeClass('linha-ativa');
                      $(this).parent().next().addClass('linha-ativa'); //add a classe linha ativa para o próximo item da tabela
                    }
                  }



                  //alterações de background de acordo com o "nível" escolhido nos botões acima (pequeno, médio ou grande)

                  if(pageviews < 200000){ /*200000 = pequeno negócio */
                      $('.wrapper').find('#area-gradiente').removeClass('amarelo-gradiente vermelho-gradiente').addClass('azul-gradiente');
                      $('#peq_negocio').prop('checked', true);
                  }
                  else if((pageviews >= 200000) && (pageviews < 500000)){ /* médio negócio */
                      $('.wrapper').find('#area-gradiente').removeClass('azul-gradiente vermelho-gradiente').addClass('amarelo-gradiente');
                      $('#med_negocio').prop('checked', true);
                  }else{ /* grande negócio */
                       $('.wrapper').find('#area-gradiente').removeClass('azul-gradiente amarelo-gradiente').addClass('vermelho-gradiente');
                       $('#grande_negocio').prop('checked', true);
                  }
              }else{
                /* se a qtd escolhida não for maior que a linha atual, mantém o efeito da tabela, quando vc volta o range pra um valor menor */
                  $(this).parent().fadeIn(500);
                  $(this).parent().next().removeClass('linha-ativa');
                  /* se o valor escolhido for menor que o plano mais barato, aplica a classe à primeira linha da tbl */
                  if(valor <= 3000){
                      $(this).parent().addClass('linha-ativa');
                  }
              }      
                     
      });
      if (pageviews > 500000) {
        document.getElementById('visualizacoes').innerHTML = "500.00+";
      }
  });

  //Animações dos elementos de forma dinâmica
   utils.animeScroll('.caixa-precos', 'animated fadeInLeftBig caixa-precos-show');
   $(document).scroll(
      utils.debounce(function(){
      utils.animeScroll('.cliente-hide', 'animated fadeInRightBig cliente-show');
      utils.animeScroll('.duvidas-comuns', 'animated flipInX duvidas-comuns-show');
}, 10));

/* alteração no background e nos valores da tabela e do texto de #visualizacoes no topo da tabela de acordo com o segmento escolhido */
$('input[type=radio]').on('change',function(){
  if($(this).val() === 'pequeno'){
      $('#pageviewsQtd').val(0);
      $('#visualizacoes').text('0');
      $('.wrapper').find('#area-gradiente').removeClass('amarelo-gradiente vermelho-gradiente').addClass('azul-gradiente');
  }
  if($(this).val() === 'medio'){
      $('#pageviewsQtd').val(200000);
      $('#visualizacoes').text('200.000');
      $('.wrapper').find('#area-gradiente').removeClass('azul-gradiente vermelho-gradiente').addClass('amarelo-gradiente');
  }
  if($(this).val() === 'grande'){
      $('#pageviewsQtd').val(600000);
      $('#visualizacoes').text('500.000+');
      $('.wrapper').find('#area-gradiente').removeClass('azul-gradiente amarelo-gradiente').addClass('vermelho-gradiente');
  }
  var pageviews = $('#pageviewsQtd').val();
  /* aplica os efeitos de apagar ou exibir a linha de acordo com o valor do input */
  $('tr td:first-child').each(function(index){
      var valor = app.convertInteger($(this).text());
          if(pageviews > valor && $(this).text() != "Infinitas impressões"){
              $(this).parent().slideUp();
              $(this).parent().removeClass('linha-ativa animated zoomInUp');
              $(this).parent().next().addClass('linha-ativa animated zoomInUp');
          }else{
              $(this).parent().show();
              $(this).parent().next().removeClass('linha-ativa animated zoomInUp');
              if(valor <= 3000){
                  $(this).parent().addClass('linha-ativa animated zoomInUp');
              }
          }
  });

});

}());
