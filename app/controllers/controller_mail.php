<?php

class Controller_mail extends Controller {

    public function action_index()
    {

        if (empty($_POST['name']) || empty($_POST['mail']) || empty($_POST['description']) ) {
            $this->view->generate('mail_view.twig',
                array(
                    'title' => 'Написать нам письмо',
                    'action'    => "/mail",
                    'error'     => ""
                ));
        } else {
            $name=$this->incomingData($_POST['name']);
            $mail=$this->incomingData($_POST['mail']);
            $description=$this->incomingData($_POST['description']);

            $this->sandMail($name,$mail,$description);
            $this->view->generate('mail_view.twig',
                array(
                    'title' => 'Написать нам письмо',
                    'action'    => "/mail",
                    'error'     => "Письмо отправленно"
                ));
        }
    }
    
    protected function sandMail($name,$email,$text)
    {
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'leather2m@gmail.com';                 // SMTP username
        $mail->Password = 'malvex1987';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        $mail->setFrom('gallery@', 'тех.поддержка галереи');
        $mail->addAddress($email, 'Gallery question');     // Add a recipient
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Вопрос с галереи';
        $mail->Body    = $text.' from '.$name.' - '.$email;
        $mail->AltBody = 'Вопрос с галереи';

        if(!$mail->send()) {
            echo 'ошибка отправки письма';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Письмо отправленно';
        }

    }

}

