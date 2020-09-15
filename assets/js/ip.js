function IpList()
{
	$.ajax({
			url: 'http://radiocampusapi.com.br/users/online',
			type: 'GET',
		}).done(function(resultado){
			var array = $.map(resultado, el => el)
			var messages = array.map(message =>{
				//falta implementar
				return console.log(message);

			})
		});

}

//Create email
$('#form_email').submit(function(e){
	e.preventDefault();

	var destinatarioo = $('#destinatario').val();
	var assuntoo = $('#assunto').val();
	var msg = $('#msg').val();

	$.ajax({
			url: 'http://radiocampusadmin.com.br/app/ajax/sendEmail.php',
			type: 'post',
			data: {destinatario: destinatarioo, assunto: assuntoo, mensagem: msg},
			dataType: 'json',
			 beforeSend: function() {
			  	$('#carregar').css("display", "flex");
			},
			success: function (data) {
				$('#carregar').css("display", "none");
				Swal.fire(
				  'SUCESSO!',
				  'Email enviado com sucesso!',
				  'success'
				)
				$('#destinatario').val("");
				$('#assunto').val("");
				$('#msg').val("");
			}
		});

});

$(document).ready(function(){
	IpList();
});