<!DOCTYPE html>
<html lang="pt-br">
	<head>   <title>S.i.D - Sistema de Importação e Gerenciamento de Dados Acadêmicos </title>  </head> 
	<p align = "middle">  <h1>Resultado da Pesquisa - Notas Disciplinas - Serviço de email</h1> </p>
    <link rel="stylesheet" href="mail.css" media="all"/>	
	<br><br>
	
	    <meta charset="utf8">
    <body>
        <form action="sid_email_enviar.php" method="post">
            
		 <br><th> <p align = "middle"> <label for="email">e-mail: </label> </th>  
                <input required name="email" type="email" value="<?php echo $_GET["email"];?>" >
         <br>
         <br><th> <label for="mensagem">Mensagem: </label> </th>
	     <textarea required name="mensagem"> </textarea> <br>
          
         <br><th><button type="submit"> &nbsp Enviar &nbsp </button></th> <br>
		 <br>
		 <br>
		 <br>
	    <center>	<input name = "Send" class="buttom" onClick = "document.location=' http://www.fatecipiranga.edu.br '" value="&nbsp &nbsp &nbsp Sair " > 
		
		</form>
    </body>
</html>