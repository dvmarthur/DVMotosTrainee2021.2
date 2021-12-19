<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class ContatoController
{
    public function contato()
    {
        return view('/site/contato');
    }

    public function sendEmail()
    {
        require 'vendor/autoload.php';

        //die(var_dump($_POST));

        $nome = $_POST['nome'];

        $email = $_POST['email'];

        $assunto = $_POST['assunto'];

        $mensagem = $_POST['mensagem'];

        $telefone = $_POST['telefone'];
        
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'dvmotostore@gmail.com';
        $mail->Password = 'dvmotos123';
        $mail->Port = 587;

        $mail->setFrom($email, $nome);
        $mail->addReplyTo($email);

        $mail->addAddress('dvmotostore@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem;

        if(!$mail->send()) {
            echo "<script>alert('Mensagem não enviada');</script>";
            //$erro = 'erro: ' . $mail->erro
            echo '<script>alert(Erro inesperado);</script>';
            //header('Location: /contato');
            return view('site/contato');
        } 
        
        else {
            echo "<script>alert('Mensagem enviada');</script>";
            return view('site/contato');
        }
    }
    
    public function show()
    {
        
    }

    public function create()
    {
 
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
 
    }
}