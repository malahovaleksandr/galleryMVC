<?php

class Controller_mail extends Controller {

    public function action_index()
    {

        $this->view->generate('mail_view.twig',
            array(
                'title' => 'Написать нам письмо',
                'action'    => "controllers/controller_mail",
                'error'     => ""
            ));
    }

}
//$registration = new sandMail();
//
////функция отпраки письма хозяину магазина
//$name         = 'Gallery';
//$emailOwner   = 'orders@loft.com';//почта хозяина магазина
//$mailSand     = 'leather2m@gmail.com';//почта с которой отправляется письмо
//$passMail     = 'malvex1987';//пароль от почты с которой отправляется письмо
//$emailClient  = $_POST['email'];
//$nameClient   = $_POST['name'];
//$textQuestion = $_POST['description'];
//$Subject      = 'Вопрос от посетителя';
//$text         = ' вопрос: Имя '.$nameClient.', email '.$emailClient.'<br> содержание'.$textQuestion;
//
//$registration->sandMailMajor($emailOwner,$name,$Subject,$text,$mailSand,$passMail);
