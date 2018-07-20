jQuery(document).ready(function($) { 
	$(".scroll").click(function(event){        
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	});
});


function Alerta(){
	alert("Email Enviado com Sucesso")
}