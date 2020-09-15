//função de atualizar ouvintes - da API
function AtualizaOuvintes()
{
	$.ajax({
		url: 'http://radiocampusapi.com.br/users/online',
		type: 'GET',
		success: function (data) {
			$('#ouvintes').text(data.numbers);
		}
	});
}
//função que atualiza em realtime os dados de likes da API
function AtualizaLikes()
{
	$.ajax({
			url: 'http://radiocampusapi.com.br/users/likes',
			type: 'GET',
			success: function (data) {
				$('#likes').text(data.likes);
			}
		});
}
//função que atualiza em realtime os dados de interacao da API
function AtualizarInteracao()
{
	$.ajax({
			url: 'http://radiocampusapi.com.br/messages',
			type: 'GET',
			success: function (data) {
				$('#interacao').text(data.length);
			}
		});
}
//função que exclui todos os registros de chat

//intervalos
setInterval("AtualizaOuvintes()", 15000);
setInterval("AtualizarInteracao()", 15000);
setInterval("AtualizaLikes()", 15000);

$(document).ready(() => {
	AtualizaOuvintes();
	AtualizaLikes();
	AtualizarInteracao();
})