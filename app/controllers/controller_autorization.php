<?php
class controller_autorization extends Controller {

    public function action_index()
    {
        if (empty($_POST)) {
            $this->view->generate('base_view.twig',
                array(
                    'titleFrom' => 'Авторизация',
                    'action'    => "/autorization",
                    'error'     => !empty($_SESSION['err']) ? $_SESSION['err'] : ''
                ));
        } else {
            if ($_POST['login'] && $_POST['password']) {
                $_SESSION['err'] = '';
                $registr = new Model_autorization();
                $test    = $registr::where('login', $_POST['login'])->where('password', $_POST['password'])->first();
                if (!$test) {
                    $_SESSION['err'] = 'не правильно ввели пароль или логин';
                    header("Location: /autorization");
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