<?php


class controller_gallery extends Controller {
    public function action_index()
    {
        $this->checkAyth();
        $saveData          = new Model_gallery();
        //доделать запрос на выборку всех photo

        $srcPhoto=$saveData::select('photo')->get();


        $saveData->save();
        $this->view->generate('gallery_view.twig',
            array(
                'title'  => 'Галерея',
                'action' => '/gallery'
            ));
    }
}
