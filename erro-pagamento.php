<?php
include "includes.php";
include('phpmailer/class.phpmailer.php');
session_destroy();
$idCompra = $_GET['id_compra'];

$dadosCompras = $compras->rsDados($idCompra);
$idCliente = $dadosCompras->id_cliente;
$dadosClientes = $clientes->rsDados($idCliente);
$status = exibe_status_compra($dadosCompras->status_compra);
$valor = number_format($dadosCompras->valor,2,',','.');
$localFilme   = $dadosCompras->id_cidade;
if($dadosCompras->forma_pagamento == "CRE")
{
    $formaPagamento = "Crédito a vista";
}

if($dadosCompras->forma_pagamento == "DEB")
{
    $formaPagamento = "Débito";
}
$compras->excluirProdutoErroPagamento();

if($localFilme == 1){
    $nomeLocal = "Formosa";
    $email_confirmacao = "cinepremierformosa@gmail.com";
}
if($localFilme == 2){
    $nomeLocal = "Lem";
    $email_confirmacao = "cinepremierlem@gmail.com";
}

if($localFilme == 4){
    $nomeLocal = "Sobradinho";
    $email_confirmacao = "cinepremiersobradinho2@gmail.com";
}
if($localFilme == 5){
    $nomeLocal = "Barreiras";
    $email_confirmacao = "cinemabarreiras@gmail.com";
}
if($localFilme == 6){
    $nomeLocal = "Guanambi";
    $email_confirmacao = "cinemagbi@gmail.com";
}
$mail = new PHPMailer();
		  
$mensagem = "<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml'
    xmlns:o='urn:schemas-microsoft-com:office:office'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='x-apple-disable-message-reformatting'>
    <title></title>

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>


    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }


        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }


        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }


        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }


        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }


        img {
            -ms-interpolation-mode: bicubic;
        }


        a {
            text-decoration: none;
        }


        *[x-apple-data-detectors],
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }


        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        .im {
            color: inherit !important;
        }


        img.g-img+div {
            display: none !important;
        }


        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }


        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }
    </style>


    <style>
        .primary {
            background: #30e3ca;
        }

        .bg_white {
            background: #ffffff;
        }

        .bg_light {
            background: #fafafa;
        }

        .bg_black {
            background: #000000;
        }

        .bg_dark {
            background: rgba(0, 0, 0, .8);
        }

        .email-section {
            padding: 2.5em;
        }


        .btn {
            padding: 10px 15px;
            display: inline-block;
        }

        .btn.btn-primary {
            border-radius: 5px;
            background: #30e3ca;
            color: #ffffff;
        }

        .btn.btn-white {
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }

        .btn.btn-white-outline {
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn.btn-black-outline {
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Lato', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .4);
        }

        a {
            color: #30e3ca;
        }




        .logo h1 {
            margin: 0;
        }

        .logo h1 a {
            color: #30e3ca;
            font-size: 24px;
            font-weight: 700;
            font-family: 'Lato', sans-serif;
        }


        .hero {
            position: relative;
            z-index: 0;
        }

        .hero .text {
            color: rgba(0, 0, 0, .3);
        }

        .hero .text h2 {
            color: #000;
            font-size: 40px;
            margin-bottom: 0;
            font-weight: 400;
            line-height: 1.4;
        }

        .hero .text h3 {
            font-size: 24px;
            font-weight: 300;
        }

        .hero .text h2 span {
            font-weight: 600;
            color: #30e3ca;
        }




        .heading-section h2 {
            color: #000000;
            font-size: 28px;
            margin-top: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        .heading-section .subheading {
            margin-bottom: 20px !important;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(0, 0, 0, .4);
            position: relative;
        }

        .heading-section .subheading::after {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            content: '';
            width: 100%;
            height: 2px;
            background: #30e3ca;
            margin: 0 auto;
        }

        .heading-section-white {
            color: rgba(255, 255, 255, .8);
        }

        .heading-section-white h2 {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1;
            padding-bottom: 0;
        }

        .heading-section-white h2 {
            color: #ffffff;
        }

        .heading-section-white .subheading {
            margin-bottom: 0;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, .4);
        }


        ul.social {
            padding: 0;
        }

        ul.social li {
            display: inline-block;
            margin-right: 10px;
        }



        .footer {
            border-top: 1px solid rgba(0, 0, 0, .05);
            color: rgba(0, 0, 0, .5);
        }

        .footer .heading {
            color: #000;
            font-size: 20px;
        }

        .footer ul {
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(0, 0, 0, 1);
        }
    </style>


</head>

<body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;'>
    <center style='width: 100%; background-color: #f1f1f1;'>
        <div
            style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style='max-width: 600px; margin: 0 auto;' class='email-container'>

            <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'
                style='margin: auto;'>
                <tr>
                    <td valign='top' class='bg_white' style='padding: 1em 2.5em 0 2.5em;'>
                        <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign='middle' class='hero bg_white' style='padding: 3em 0 2em 0;'>
                        <img src='https://cinemaspremier.com.br/images/logo.png' style='max-width: 600px; height: auto; margin: auto; display: block;'>
                    </td>
                </tr>
                <tr>
                    <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
                        <table>
                            <tr>
                                <td>
                                    <div class='text' style='padding: 0 2.5em; text-align: left;'>
                                    <h3 style='font-size: 14px;
                                        text-align: center;
                                        font-weight: 400;'>Opa! Houve um problema com seu pedido. </h3>
                                        <h1 style='background-color: #c30909; color: white; padding: 0 33px 0;
                                        border: 5px solid black; font-size: 20px; font-weight: 800;'>Seu pedido não foi efetuado</h1>
                                        
                                        <table border='0' width='100%' align='left'>
                                            <tr>
                                                
                                                </td>
                                               

                                            </tr>
                                            ";
                                       
                                            $mensagem.= "    
                                            <tr>
                                             
                                            </tr>
                                            "; 
                                         
                                            $mensagem.="
                                            <tfoot style='background-color: #c30909;'>
                                                <tr>
                                                    <td colspan='4' style='color: white;'>
                                                    Cidade: $nomeLocal<br>
                                                    Nome cliente: $dadosClientes->nome<br>
                                                    E-mail cliente: $dadosClientes->email<br>
                                                    Forma de Pagamento: $formaPagamento<br> <br>
                                                    Status do Pagamento: <br><br><b><span style='color: black;'>$status</span></b>
                                                    <br><br><br><br><br>
                                                    <span>&nbsp;&nbsp;&nbsp;<b>Para mais informações, contate a operadora do seu cartão.</b><span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                            <tr>
                                           
                                        <tr>
                                        </table>
                                    </div>
        </div>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'
            style='margin: auto;'>

            <tr>
                <td class='bg_light' style='text-align: center;'>
                    <p>Copyright © 2020 Cinema Premier - Todos os direitos reservados</p>
                </td>
            </tr>
        </table>
        </div>
    </center>
</body>

</html>";

echo $mensagem;
exit;
		 
          
		  $mail->IsSMTP(); // telling the class to use SMTP

		try {
			 $mail->Host       = "mail.cinemaspremier.com.br";// sets GMAIL as the SMTP server
			 $mail->SMTPDebug  = 1;// enables SMTP debug information (for testing)
			 $mail->SMTPAuth   = true;// enable SMTP authentication
			 //$mail->SMTPSecure = "ssl";// sets the prefix to the servier
			 $mail->Host       = "mail.cinemaspremier.com.br";// sets GMAIL as the SMTP server
			 $mail->Port       = 587;// set the SMTP port for the GMAIL server
			 $mail->Username   = "cinemaspremier@cinemaspremier.com.br";// GMAIL username
			 $mail->Password   = "brasil2009";// GMAIL password
			 //$mail->AddReplyTo($_POST['email'], $_POST['nome']);
			 $mail->AddAddress($dadosClientes->email);
			 //$mail->AddAddress('contato@clinicaandros.com.br');
			 $mail->SetFrom('contato@cinemaspremier.com.br', 'Cinemas Premier');
			 $mail->Subject = "ERRO DE PAGAMENTO - Cinemas Premier";
			 $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; 
			 $mail->MsgHTML($mensagem);
			 $mail->Send();
		  } catch (phpmailerException $e) {
			  echo $e->errorMessage(); //Pretty error messages from PHPMailer
		  } catch (Exception $e) {
			  echo $e->getMessage(); //Boring error messages from anything else!
		  }

          
          $mail = new PHPMailer();
		  
		  $mensagem2 = "<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml'
    xmlns:o='urn:schemas-microsoft-com:office:office'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='x-apple-disable-message-reformatting'>
    <title></title>

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>


    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }


        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }


        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }


        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }


        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }


        img {
            -ms-interpolation-mode: bicubic;
        }


        a {
            text-decoration: none;
        }


        *[x-apple-data-detectors],
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }


        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        .im {
            color: inherit !important;
        }


        img.g-img+div {
            display: none !important;
        }


        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }


        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }
    </style>


    <style>
        .primary {
            background: #30e3ca;
        }

        .bg_white {
            background: #ffffff;
        }

        .bg_light {
            background: #fafafa;
        }

        .bg_black {
            background: #000000;
        }

        .bg_dark {
            background: rgba(0, 0, 0, .8);
        }

        .email-section {
            padding: 2.5em;
        }


        .btn {
            padding: 10px 15px;
            display: inline-block;
        }

        .btn.btn-primary {
            border-radius: 5px;
            background: #30e3ca;
            color: #ffffff;
        }

        .btn.btn-white {
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }

        .btn.btn-white-outline {
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn.btn-black-outline {
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Lato', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .4);
        }

        a {
            color: #30e3ca;
        }




        .logo h1 {
            margin: 0;
        }

        .logo h1 a {
            color: #30e3ca;
            font-size: 24px;
            font-weight: 700;
            font-family: 'Lato', sans-serif;
        }


        .hero {
            position: relative;
            z-index: 0;
        }

        .hero .text {
            color: rgba(0, 0, 0, .3);
        }

        .hero .text h2 {
            color: #000;
            font-size: 40px;
            margin-bottom: 0;
            font-weight: 400;
            line-height: 1.4;
        }

        .hero .text h3 {
            font-size: 24px;
            font-weight: 300;
        }

        .hero .text h2 span {
            font-weight: 600;
            color: #30e3ca;
        }




        .heading-section h2 {
            color: #000000;
            font-size: 28px;
            margin-top: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        .heading-section .subheading {
            margin-bottom: 20px !important;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(0, 0, 0, .4);
            position: relative;
        }

        .heading-section .subheading::after {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            content: '';
            width: 100%;
            height: 2px;
            background: #30e3ca;
            margin: 0 auto;
        }

        .heading-section-white {
            color: rgba(255, 255, 255, .8);
        }

        .heading-section-white h2 {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1;
            padding-bottom: 0;
        }

        .heading-section-white h2 {
            color: #ffffff;
        }

        .heading-section-white .subheading {
            margin-bottom: 0;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, .4);
        }


        ul.social {
            padding: 0;
        }

        ul.social li {
            display: inline-block;
            margin-right: 10px;
        }



        .footer {
            border-top: 1px solid rgba(0, 0, 0, .05);
            color: rgba(0, 0, 0, .5);
        }

        .footer .heading {
            color: #000;
            font-size: 20px;
        }

        .footer ul {
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(0, 0, 0, 1);
        }
    </style>


</head>

<body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;'>
    <center style='width: 100%; background-color: #f1f1f1;'>
        <div
            style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style='max-width: 600px; margin: 0 auto;' class='email-container'>

            <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'
                style='margin: auto;'>
                <tr>
                    <td valign='top' class='bg_white' style='padding: 1em 2.5em 0 2.5em;'>
                        <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign='middle' class='hero bg_white' style='padding: 3em 0 2em 0;'>
                        <img src='https://cinemaspremier.com.br/images/logo.png' style='max-width: 600px; height: auto; margin: auto; display: block;'>
                    </td>
                </tr>
                <tr>
                    <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
                        <table>
                            <tr>
                                <td>
                                   <div class='text' style='padding: 0 2.5em; text-align: left;'>
                                    <h3 style='font-size: 14px;
                                        text-align: center;
                                        font-weight: 400;'>Opa! Houve um problema com seu pedido. </h3>
                                        <h1 style='background-color: #c30909; color: white; padding: 0 33px 0;
                                        border: 5px solid black; font-size: 20px; font-weight: 800;'>Seu pedido não foi efetuado</h1>
                                        
                                        <table border='0' width='100%' align='left'>
                                            <tr>
                                                
                                                </td>
                                               

                                            </tr>
                                            ";
                                       
                                            $mensagem.= "    
                                            <tr>
                                             
                                            </tr>
                                            "; 
                                         
                                            $mensagem.="
                                            <tfoot style='background-color: #c30909;'>
                                                <tr>
                                                    <td colspan='4' style='color: white;'>
                                                    Cidade: $nomeLocal<br>
                                                    Nome cliente: $dadosClientes->nome<br>
                                                    E-mail cliente: $dadosClientes->email<br>
                                                    Forma de Pagamento: $formaPagamento<br> <br>
                                                    Status do Pagamento: <br><br><b><span style='color: black;'>$status</span></b>
                                                    <br><br><br><br><br>
                                                    <span>&nbsp;&nbsp;&nbsp;<b>Para mais informações, contate a operadora do seu cartão.</b><span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                            <tr>
                                           
                                        <tr>
                                        </table>
                                    </div>
        </div>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
        <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'
            style='margin: auto;'>

            <tr>
                <td class='bg_light' style='text-align: center;'>
                    <p>Copyright © 2020 Cinema Premier - Todos os direitos reservados</p>
                </td>
            </tr>
        </table>
        </div>
    </center>
</body>

</html>";
		
		  
		  $mail->IsSMTP(); // telling the class to use SMTP


		  try {
			 $mail->Host       = "mail.cinemaspremier.com.br";// sets GMAIL as the SMTP server
			 $mail->SMTPDebug  = 1;// enables SMTP debug information (for testing)
			 $mail->SMTPAuth   = true;// enable SMTP authentication
			 //$mail->SMTPSecure = "ssl";// sets the prefix to the servier
			 $mail->Host       = "mail.cinemaspremier.com.br";// sets GMAIL as the SMTP server
			 $mail->Port       = 587;// set the SMTP port for the GMAIL server
			 $mail->Username   = "cinemaspremier@cinemaspremier.com.br";// GMAIL username
			 $mail->Password   = "brasil2009";// GMAIL password
			 //$mail->AddReplyTo($_POST['email'], $_POST['nome']);
			 $mail->AddAddress($email_confirmacao);
			 //$mail->AddAddress('contato@clinicaandros.com.br');
			 $mail->SetFrom('contato@cinemaspremier.com.br', 'Cinema Premier');
			 $mail->Subject = "ERRO DE PAGAMENTO - Cinema Premier";
			 $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; 
			 $mail->MsgHTML($mensagem2);
			 $mail->Send();
			 
			 
		 
		  } catch (phpmailerException $e) {
			  echo $e->errorMessage(); //Pretty error messages from PHPMailer
		  } catch (Exception $e) {
			  echo $e->getMessage(); //Boring error messages from anything else!
		  }

?>

<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
    <?php if(isset($infoSistema->favicon) && !empty($infoSistema->favicon)){?>
		<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
		<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>" >
    <?php }?>
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/animate.css">
        <!-- flaticon css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/flaticon.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/font-awesome.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo SITE_URL;?>/css/responsive.css">
        <!-- modernizr css -->
        <script src="<?php echo SITE_URL;?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
       
       <?php include "header.php";?>
        <!-- Breadcumb Area Start Here -->
        <div class="breadcumb-area">
            <div class="container-fluid acurate">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="breadcumb">
                            <ul>
                                <li><a href="<?php echo SITE_URL;?>/.">Home <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <li>Detalhes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb Area End Here -->
        <!-- Single Movie Show Start Here -->
        <div class="single-movie-show-area siix">
          <div class="container">
            <div class="row">              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="movies-show-title">
                      <h1 style="color: red;">Opa! Tem alguma coisa errada!</h1>
                  </div>
              </div>
            </div>
            <div class="row single-movie-show">              
             
              <h1 style="background-color: #23abd1; color:white;">Detalhes da Compra</h1>
    <div class="col-md-8">
    <div class="table-responsive">
   
   <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
  <tr>
         <th colspan="2">
               <h3 style="color:red;">ATENÇÃO! ESTE NÃO É O COMPROVANTE DE COMPRA!</h3>
               <h4 style="color:red;">O COMPROVANTE FOI ENVIADO PARA O SEU E-MAIL.<br> POR FAVOR, VERIFIQUE SUA CAIXA DE ENTRADA E SPAM.<h4>
               </th>
      </tr>
      <tr>
      <th scope="col">Status Compra:</th>
      <th scope="col" style="color: red;"><?php echo $status;?></th>
      
    </tr>
  <tr>
      <th scope="col">Nome:</th>
      <th scope="col"><?php echo $dadosClientes->nome;?></th>
      
    </tr>
    <tr>
      <th scope="row">E-mail:</th>
      <th scope="col"><?php echo $dadosClientes->email;?></th>
      
      
    </tr>
    <tr>
      <th scope="row">Telefone:</th>
      <th scope="col"><?php echo $dadosClientes->telefone;?></th>
      
    </tr>
   <tr>
       <th scope="row" style="color: red;">Você terá que refazer seu pedido.</th>
   </tr>
  </tbody>
</table>

</div>
</div>
    <div class="col-md-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Valor</h3>
      </div>
      <div class="panel-body">
        <h3>R$ <?php echo number_format($dadosCompras->valor,2,',','.')?></h3>
        <p><?php echo $formaPagamento; ?></p>
      </div>
    </div>
    </div> 
            </div>
          
          
          </div>
        </div>
        <!-- Single Movie Show End Here -->
        <!-- Zooks Promos Start Here -->
        <?php include"newsletter.php";?>
        <!-- Zooks Promos End Here -->
    <?php include "footer.php";?>
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="<?php echo SITE_URL;?>/js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="<?php echo SITE_URL;?>/js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="<?php echo SITE_URL;?>/js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="<?php echo SITE_URL;?>/js/jquery.meanmenu.js"></script>
        <!-- jquery-ui js -->
        <script src="<?php echo SITE_URL;?>/js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="<?php echo SITE_URL;?>/js/wow.min.js"></script>
        <!-- plugins js -->
        <script src="<?php echo SITE_URL;?>/js/plugins.js"></script>
         <script src="<?php echo SITE_URL;?>/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <!-- main js -->
        <script src="<?php echo SITE_URL;?>/js/main.js"></script>
        <script src="<?php echo SITE_URL;?>/js/script_loads.js"></script>
      
    </body>
</html>