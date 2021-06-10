<?php
define("Gmail_User", "Y29udGFjdGpjdXJ0aXNAZ21haWwuY29t");
define("Gmail_Pwd", "UmF5Y2hhcmxlczkzMzAw");
function sendEmail($email, $nom, $subject, $message) {
    $mail = new PHPMailer();  // Cree un nouvel objet PHPMailer
    $mail->IsSMTP(); // active SMTP
    $mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
    $mail->SMTPAuth = true;  // Authentification SMTP active
    $mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    $mail->Username = base64_decode(Gmail_User);
    $mail->Password = base64_decode(Gmail_Pwd);
    $mail->SetFrom($email, $nom);
    $mail->Subject = $subject;
    $mail->Body = "De :".$email.'<br>'.$message;
    $mail->IsHTML(true);
    $mail->AddAddress(base64_decode(Gmail_User));
    try {
        if (!$mail->Send()) {
            echo "<script type=\"text/javascript\">
                    Swal.fire(
                        'Attention',
                        '$mail->ErrorInfo',
                        'error'
                    )
                </script>";
        } else {
            echo "<script type=\"text/javascript\">
                    Swal.fire(
                        'Félicitations',
                        'Votre email a été envoyé avec succès, Louis !',
                        'success'
                    )
                </script>";
        }
    } catch (phpmailerException $e) {
        return "<script type=\"text/javascript\">
                    Swal.fire(
                        'Attention',
                        'Une erreur s\'est occurée lors de l\'envoie du mail',
                        'error'
                    )
                </script>";
    }
}