<?php

if(isset($_POST['form-email']) && !empty($_POST['form-email'])){
    $nome = addcslashes($_POST['form-name']);
    $email = addcslashes($_POST['form-email']);
    $assunto = addcslashes($_POST['form-assunto']);
    $mensagem = addcslashes($_POST['form-textmenssagem']);

    $to = "interativatec.com";
    $subject = $_POST['form-assunto'];
    $body = "Nome: ".$nome. "\r\n".
            "E-mail: ".$email. "\r\n".
            "Messagem: ".$mensagem;

    $header = "From: contato@interativatec.com"."\r\n"
             ."Reply-To:".$email."\r\n"
             ."X-Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
        echo("E-mail enviado com suceso");
    }else{
        echo("o E-mail não pode ser enviado");
    }
}

?>
