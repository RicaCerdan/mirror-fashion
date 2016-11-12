$('.novidades').addClass('painel-compacto');


$('.novidades button').click (function () {
	$('.novidades').toggleClass('painel-compacto');
});

var verMais = $ (".ver mais");

function verMais () {

	painel.toggleClass("painel-expandido");

	if (!painel.hasClass("painel-escondido")) 

	{

		verMais.html("ver menos");
	}

	else {
		verMais.html("ver mais");

	}

}