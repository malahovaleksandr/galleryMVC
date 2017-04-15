<?php


class Controller_Main extends Controller
{
    public function action_index()
    {
       
        if (empty($_POST)) {
            $this->view->generate('base_view.twig',
                array(
                    'titleFrom' => 'Регистрация',
                    'action'    => "#",
                    'error'     => !empty($_SESSION['err']) ? $_SESSION['err'] : ''
                ));
        } else {
            
            if ($_POST['login'] && $_POST['password']) {
                $registr = new Model_registration();
                $test    = $registr::where('login', $_POST['login'])->first();
                if ($test) {
                    $_SESSION['err'] = 'такой логин уже есть';
                    header("Location: /");
                } else {
                    $registr->login    = $_POST['login'];
                    $registr->password = $_POST['password'];
                    $registr->save();
                    $_SESSION['auth']  = "autorization";
                    header("Location: /cabinet");
                }
            } else {
                $_SESSION['err'] = 'Вы не заполнили все поля';
                header("Location: /");
            }
        }
    }
}


