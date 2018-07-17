jQuery(document).ready(function($) { 
	$(".scroll").click(function(event){        
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	});
});


function validateForm() {
    var name =  document.getElementById('name').value;
    if (name == "") {
        document.getElementById('status').innerHTML = "Nome não pode estar vazio";
        return false;
    }
    var email =  document.getElementById('email').value;
    if (email == "") {
        document.getElementById('status').innerHTML = "Email não pode estar vazio";
        return false;
    } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!re.test(email)){
            document.getElementById('status').innerHTML = "Email não pode estar vazio";
            return false;
        }
    }
    
    var message =  document.getElementById('message').value;
    if (message == "") {
        document.getElementById('status').innerHTML = "Message não pode estar vazia";
        return false;
    }
    document.getElementById('status').innerHTML = "Enviando...";
    document.getElementById('formulario').submit();

}
