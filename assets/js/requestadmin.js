//Inserindo requisição no banco
$('#form1').submit(function(e){
	e.preventDefault();

	var r_nome = $('#nome').val();
	var r_email = $('#email').val();
	var r_senha = $('#senha').val();

	$.ajax({
			url: 'http://radiocampusadmin.com.br/app/ajax/requestAdmin.php',
			type: 'POST',
			data: {nome: r_nome, email: r_email, senha: r_senha},
			dataType: 'json',

		  beforeSend: function() {
		  	$('#carregar').css("display", "flex");
		},
		}).done(function(result){
			$('#carregar').css("display", "none");
			if(result.error == true)
			{
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Parece que já existe uma solicitação pendente, ou este email já existe!',
				})
			}else{
				Swal.fire(
				  'SUCESSO!',
				  'Aguarde um administrador aceitar sua solicitação.',
				  'success'
				)
			}
		}).fail(function(result){
			Swal.fire(
			  'Opa, espera ai!',
			  'Ocorreu algum erro, verifique os dados.',
			  'question'
			)
		});
});



