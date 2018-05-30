<!DOCTYPE html>
<html lang="pt-br">
	<?php session_start();
    include_once("conexao.php");?>
    <body>
		
		<script>
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			var userID = profile.getId(); 
			var userName = profile.getName(); 
			var userPicture = profile.getImageUrl(); 
			var userEmail = profile.getEmail(); 			 
			var userToken = googleUser.getAuthResponse().id_token; 
			
			//document.getElementById('msg').innerHTML = userEmail;
			if(userEmail !== ''){
				var dados = {
					userID:userID,
					userName:userName,
					userPicture:userPicture,
					userEmail:userEmail
				};
				$.post('valida.php', dados, function(retorna){
					if(retorna === '"erro"'){
						var msg = "Usuário não encontrado com esse e-mail";
						document.getElementById('msg').innerHTML = msg;
					}else{
						window.location.href = retorna;
					}
					
				});
			}else{
				var msg = "Usuário não encontrado!";
				document.getElementById('msg').innerHTML = msg;
			}
		}
		</script>	

    </body>
</html>