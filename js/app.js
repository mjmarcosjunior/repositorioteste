var app = {};

/* tranforma o valor do input em número e insere no texto acima da tabela */
app.getRangeValue = function(inputElement, outputElement, callback){
    $(inputElement).on('input', function(e){
        $(outputElement).number($(inputElement).val(), 0, ',', '.');
        if(callback){
            return callback();
        }
    });
}
// pega o valor da tabela em formato string e retonar um inteiro
app.convertInteger = function (elemento){
      var valor = Number(elemento.replace(/\D/g,''));
      return valor;
}
