<!-- Função Jquery que realiza o submit -->
$(document).ready(function(){
        $('#btn_submit').bind('click', function (event) {
          event.preventDefault();
          $.ajax({
            type: 'POST',
            url: '../receba2.php',
            data:  $('form').serialize(),
            success: function (resposta) {
                var retorno = JSON.parse(resposta);
                if(typeof retorno['sucesso'] != "undefined"){
                     $( "#id_success" ).fadeIn( 3000 ).delay( 3500 ).fadeOut( 400 );
                   // location.reload();
                }if(typeof retorno['erro'] != "undefined"){
                     $( "#id_danger" ).fadeIn( 3000 ).delay( 3500 ).fadeOut( 400 );
                   // location.reload();
                }
            }
          });
            //location.reload();

        });
      });