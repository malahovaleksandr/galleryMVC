<?php

class controller_gallery extends Controller {
    public function action_index()
    {
        $this->checkAyth();
            $this->view->generate('gallery_view.twig',
                array(
                    'title'  => 'Галерея',
                    'action' => 'controllers/controller_gallery'
                ));
    }




}
