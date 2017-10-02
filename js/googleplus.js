
function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var idUser = profile.getId();
    var nomeUser = profile.getName();
    var imagemUser = profile.getImageUrl();
    var emailUser = profile.getEmail();
    var tokenUser = googleUser.getAuthResponse().id_token;
    
    if(emailUser !==""){
         var dados = {
        idUser: idUser,
        nomeUser: nomeUser,
        imagemUser: imagemUser,
        emailUser: emailUser,
        tokenUser: tokenUser
    };
    $.post('auth.php',dados,function (resposta) {
           if(resposta=== '"erro"'){
               $('#resp').html('<div class="alert alert-danger">Erro ao logar </div>');
           }else{
               window.location.href = resposta;
           }
        });
    }else{
        alert("Usuario não encontrado");
    }
   
}



