<?php 


if( isset($_POST['email']) && !empty($_POST['email']) ){
    $email = addcslashes($_POST['name']);
    $pergunta1 = addcslashes($_POST['pergunta1']);



$to = "contato@gnose.com.br";
$subject = " Perguntas - site";
$body = "Emal! :".$email. "\r\n".
        " Há quanto tempo você tenta engravidar ? ".$pergunta1 ;
$header = "From:cassioluciano@gnose.com.br"."\r\n" .
            "Reply-To:".$email."\r\n".
             "X=Mailer:PHP/".phpversion();

if(mail($to, $subject,$body,$header )){

    echo("Email enviado com sucesso!");

}else{

    echo("Erro ao enviar formulario!");
}

}
?>