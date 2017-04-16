<?php

class controller_gallery extends Controller {
    public function action_index()
    {
        $this->chackAyth();
            $this->view->generate('gallery_view.twig',
                array(
                    'title'  => 'Галерея',
                    'action' => 'controllers/controller_gallery'
                ));
    }

    private function chackAyth()
    {
        if($_SESSION['auth'] !== "autorization"){
            header("Location: /");
        }
    }


}
