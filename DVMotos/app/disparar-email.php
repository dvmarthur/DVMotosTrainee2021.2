<? php

    require 'mailer/PHPMailerAutoload.php';

    if(isset($_POST['nome']) AND !empty($_POST['nome'])){
        $nome = $_POST['nome'];
    }

    if(isset($_POST['email']) AND !empty($_POST['email'])){
        $email = $_POST['email'];
    }

    if(isset($_POST['assunto']) AND !empty($_POST['assunto'])){
        $assunto = $_POST['assunto'];
    }

    if(isset($_POST['mensagem']) AND !empty($_POST['mensagem'])){
        $mensagem = $_POST['mensagen'];
    }

    if(isset($_POST['telefone']) AND !empty($_POST['telefone'])){
        $telefone = $_POST['telefone'];
    }
    
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'dvmotostore@gmail.com';
    $mail->Password = 'dvmotos123';
    $mail->Port = 587;

    $mail->setFrom('dvmotostore@gmail.com');
    $mail->addReplyTo('no-reply@dvmotos_store.com');

    $mail->addAddress('dvmotostore@gmail.com');

    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } 
    
    else {
        echo "<script>alert('Usuario ou senha incorretos!');</script>";
    }
?>