<?php
use Intervention\Image\ImageManagerStatic as Image;
class controller_cabinet extends Controller {

    
    public function action_index()
    {
        Image::configure(array('driver' => 'imagick'));
        $this->chackAyth();
        $this->view->generate('cabinet_view.twig',
            array(
                'title'  => 'Кабинет',
                'action' => 'controllers/controller_cabinet.php'
            ));
    }

    private function chackAyth()
    {
        if($_SESSION['auth'] !== "autorization"){
            header("Location: /");
        }
    }


}
