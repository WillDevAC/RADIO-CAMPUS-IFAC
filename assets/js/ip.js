function IpList()
{
	$.ajax({
			url: 'http://radiocampusapi.com.br/users/online',
			type: 'GET',
		}).done(function(resultado){
			var array = $.map(resultado, el => el)
			var messages = array.map(message =>{
				//falta implementar
				if (message >= 0){return null}
				if(message == ' '){return '<p>Sem registros</p>'};
				if(message == undefined){return true}else{
					return '<tr><td class="text-center"><img src="assets/img/brasil.png" id="brasil"></td><td class"text-center>'+ message +'</td></tr>';
				}
			})
			document.querySelector("#dados").innerHTML = messages.join("");
		});
		//<tr>
		  //<td class="text-center"><img src="assets/img/brasil.png" id="brasil"></td>
		  //<td class="text-center">192.168.1.1</td>
		//</tr>

}
function abrir_player_popup() {
window.open( "https://player.xcast.com.br/player-popup-responsivo/11978/2", "","width=500,height=290,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,resizable=NO" );
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

setInterval('IpList()', 10000);