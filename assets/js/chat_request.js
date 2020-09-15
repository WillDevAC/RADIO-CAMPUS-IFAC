$(document).ready(function(){
	lista();
});

function lista(){
	$.ajax({
			url: 'http://radiocampusapi.com.br/messages',
			type: 'GET',
		}).done(function(resultado){

			/* Javascript lindão */

			var array = $.map(resultado, el => el)
			var messages = array.map(message =>{

				/* variaveis de controle */
				var you_message = '<div class="message-row you-message"><div class="message-text">' + message.msm + '</div><div class="message-time">'+ message.name +'</div></div>';
				var other_message = '<div class="message-row other-message"><div class="message-text">' + message.msm + '</div><div class="message-time">'+ message.name +'</div></div>';

				/* Verificações de segurança */
				if(message.msm == undefined){return null}
				if(message.userID == 10){return you_message}
				if(message.userID != 10){return other_message}

			})
			document.querySelector("#lista").innerHTML = messages.join("");
		});
		//<div class="message-row other-message">
        //<div class="message-text">Olá, como vai você?</div>
        //<div class="message-time">Rodrigo</div>
        //</div>
}
function ExcluirRegistros()
{
	$.ajax({
			url: 'http://radiocampusapi.com.br/messages/delete/',
			type: 'POST',
			success: function (data) {
				lista();
				Swal.fire({
				  position: 'top-center',
				  icon: 'success',
				  title: 'Chat limpo com sucesso!',
				  showConfirmButton: false,
				  timer: 1500
				})
			}
		});
}
//Create message 
$('#form2').submit(function(e){
	e.preventDefault();

	var id = 10;
	var nome = 'RADIO CAMPUS';
	var curso = 'REDES DE COMPUTADORES';
	var msg = $('#mensagem').val();


	$.ajax({
			url: 'http://radiocampusapi.com.br/messages/create',
			type: 'GET',
			dataType: 'JSON',
			data:{
				userID: id,
				msm: msg,
				name: nome,
				course: 'REDES',
			}
		}).done(function(result){
			lista();
			$('#mensagem').val("");
		});
});


setInterval('lista()', 4000);
