//máscara
$(document).ready(function(){
    $('.cpf').mask('000.000.000-00');
    $('.phone').mask('00 000000000');
    $('.donation_amount').mask('###.##0,00', {reverse:true});
  });

//validação dos campos
$().ready(function(){
    $("#form-contact").validate({
        rules : {
          name:{
                required:true, 
                minlength:12,
                maxlength:40
          },
          email:{
                required:true,
                email:true
          },
          cpf:{
                required:true,
                minlength:11
          },
          phone:{
            required:true,
            minlength:11,
            maxlength:12
          },
          birth_date:{
            required:true,
          },
          address:{
            required:true,
            minlength:8,
            maxlength:40
          },
          donation_interval:{
            required:true,
          },
          donation_amount:{
            required:true,
          },
          form_of_payment:{
            required:true,
          }                                                                                                                                
        },
        messages:{
          name:{
                 required:"Por favor, informe seu nome completo",
                 minlength:"Por favor, informe ao menos seu sobrenome" 
          },
          email:{
                 required:"Por favor, informe seu email",
                 email:"Por favor, informe um email válido"
          },
          cpf:{
                 required:"por favor, informe seu cpf",
                 minlength:"O CPF são 11 números"
          },
          phone:{
            required:"Por favor, informe seu telefone",
            minlength:"O telefone são 8 ou 9 números. Não esqueça do DDD",
            phone:"o telefone são 8 ou 9 números. Não esqueça do DDD"
          },
          birth_date:{
            required:"Por favor, informe sua data de nascimento"
          },
          address:{
            required:"Por favor, informe seu endereço",
            minlength:"Por favor, informe seu endereço completo"
          },
          donation_interval:{
            required:"Por favor, escolha um intervalo de doação"
          },
          donation_amount:{
            required:"Por favor, escolha um valor a doar"
          },
          form_of_payment:{
            required:"Por favor, escolha uma forma de pagamento"
          }                                                                          
        }
    });
});






