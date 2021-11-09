<?php
if (isset($_POST['enviaContato'])) {
 
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone']; 
 $mensagem = $_POST['mensagem'];

 $email_remetente = "meuemail@seudominio";
 

 $email_destinatario = "email@querecebe";
 $email_reply = "$email"; 
 $email_assunto = "Assunto";
 

 $email_conteudo = "Nome = $nome \n"; 
 $email_conteudo .= "Email = $email \n";
 $email_conteudo .= "Telefone = $telefone \n"; 
 $email_conteudo .= "Mensagem = $mensagem \n"; 
 
 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "</b>E-Mail enviado com sucesso!</b>"; 
 } 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
} 
?>
<div>
     <div id="textContact">
          Formulário de Contato
     </div>
     <div class="contact">
          <form action="<? $PHP_SELF; ?>" method="POST">
               <p>
                    Nome:<br />
                    <input type="name" size="30" name="nome" required>
               </p>
               <p>
                    E-mail:<br />
                    <input type="email" size="30" name="email" required>
               </p>
               <p>
                    Telefone:<br />
                    <input type="number" size="35" name="telefone" pattern="([0-9]{2}) [0-9]{4}-[0-9]{4}" required>
               </p>
               <p>
                    Mensagem:<br />
                    <input type="text" size="35" name="mensagem" required>
               </p>
               <p>
                    <input type="submit" name="enviaContato" value="Enviar">
                    <input type="reset" name="BTApaga" value="Apagar">
               </p>
          </form>
     </div>
     <div id="infContact">
          Caso deseje, entre em contato pelo telefone ou e-mail abaixo:
          
          <div id="tel">
               <p>
                    Telefone:
               </p>
               <p>
                    (11) 9999-9999
               </p>

          </div>
          
          <div>
               <p>
                    E-mail:
               </p>
               <p>
                    meuemail@seudominio
               </p>
          </div>
</div>