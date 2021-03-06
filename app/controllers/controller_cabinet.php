<?php
use Intervention\Image\ImageManagerStatic as Image;

class controller_cabinet extends Controller {
    public $loadImage;
    protected $incomeSrc;
    public function action_index()
    {
        $this->checkAyth();
        if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['description']) ) { //проверка на заполнение полей
            $_SESSION['fileErr'] = ' заполните все поля';
            $this->view->generate('cabinet_view.twig',
                array(
                    'title'  => 'Кабинет',
                    'action' => '/cabinet',
                    'error'  => !empty($_SESSION['fileErr']) ? $_SESSION['fileErr'] : '',
                    'errorName'  => !empty($_SESSION['errorName']) ? $_SESSION['errorName'] : '',
                    'errorAge'  => !empty($_SESSION['errAge']) ? $_SESSION['errAge'] : '',
                    'errorDesc'  => !empty($_SESSION['errorDesc']) ? $_SESSION['errorDesc'] : ''
                ));
        } else {
            $this->checkInput();
           if (empty($_FILES['image'])) {
               $_SESSION['fileErr'] = ' загрузите картинку';
               $this->view->generate('cabinet_view.twig',
                   array(
                       'title'  => 'Кабинет',
                       'action' => '/cabinet',
                       'error'  => !empty($_SESSION['fileErr']) ? $_SESSION['fileErr'] : '',
                       'errorName'  => !empty($_SESSION['errorName']) ? $_SESSION['errorName'] : '',
                       'errorAge'  => !empty($_SESSION['errAge']) ? $_SESSION['errAge'] : '',
                       'errorDesc'  => !empty($_SESSION['errorDesc']) ? $_SESSION['errorDesc'] : ''
                   ));
           } else {

               $this->checkSaveImage();
               $saveData              = new Model_cabinet();
               $saveData->age         =  $_POST['age'];
               $saveData->nameUser    = $_POST['name'];
               $saveData->description = $_POST['description'];
               $saveData->photo       = $this->incomeSrc;
               $saveData->save();

               $this->view->generate('cabinet_view.twig',
                   array(
                       'title'  => 'Кабинет',
                       'action' => '/cabinet',
                       'error'  => 'Данные сохранились',
                       'errorName'  => !empty($_SESSION['errorName']) ? $_SESSION['errorName'] : '',
                       'errorAge'  => !empty($_SESSION['errAge']) ? $_SESSION['errAge'] : '',
                       'errorDesc'  => !empty($_SESSION['errorDesc']) ? $_SESSION['errorDesc'] : ''
                   ));
           }
        }
    }

    private function checkInput()
    {
//        (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['description'])
        if (strlen($_POST['name'])<4) {
            $_SESSION['errorName'] = ' Имя не менее 5 символов';
            $this->view->generate('cabinet_view.twig',
                array(
                    'title'  => 'Кабинет',
                    'action' => '/cabinet',
                    'error'  => !empty($_SESSION['fileErr']) ? $_SESSION['fileErr'] : '',
                    'errorName'  => !empty($_SESSION['errorName']) ? $_SESSION['errorName'] : '',
                    'errorAge'  => !empty($_SESSION['errAge']) ? $_SESSION['errAge'] : '',
                    'errorDesc'  => !empty($_SESSION['errorDesc']) ? $_SESSION['errorDesc'] : ''
                ));
        } else {
            $_SESSION['errorName'] = '';
        }
        if (10 > (int) $_POST['age'] && (int) $_POST['age'] > 100) {
            $_SESSION['errAge'] = ' Возраст должен быть от 10 до 100';
            $this->view->generate('cabinet_view.twig',
                array(
                    'title'  => 'Кабинет',
                    'action' => '/cabinet',
                    'error'  => !empty($_SESSION['fileErr']) ? $_SESSION['fileErr'] : '',
                    'errorName'  => !empty($_SESSION['errorName']) ? $_SESSION['errorName'] : '',
                    'errorAge'  => !empty($_SESSION['errAge']) ? $_SESSION['errAge'] : '',
                    'errorDesc'  => !empty($_SESSION['errorDesc']) ? $_SESSION['errorDesc'] : ''
                ));
        } else {
            $_SESSION['errAge'] = '';
        }
        if (strlen($_POST['description'])<49) {
            $_SESSION['errorDesc'] = ' Описание не менее 50 символов';
            $this->view->generate('cabinet_view.twig',
                array(
                    'title'  => 'Кабинет',
                    'action' => '/cabinet',
                    'error'  => !empty($_SESSION['fileErr']) ? $_SESSION['fileErr'] : '',
                    'errorName'  => !empty($_SESSION['errorName']) ? $_SESSION['errorName'] : '',
                    'errorAge'  => !empty($_SESSION['errAge']) ? $_SESSION['errAge'] : '',
                    'errorDesc'  => !empty($_SESSION['errorDesc']) ? $_SESSION['errorDesc'] : ''
                ));
        } else {
            $_SESSION['errorDesc'] = '';
        }

    }
    
    
    private function checkSaveImage()
    {
        $file = $_FILES['image'];
        if (empty($file)) {
            $_SESSION['fileErr']='нет файла';
            header("Location: /cabinet");
        }
        if (
            $file['type'] != 'image/gif' and
            $file['type'] != 'image/jpeg' and //проверяем какой формат загружаем
            $file['type'] != 'image/png'
        ) {
            $_SESSION['fileErr'] = 'не тот формат';
            header("Location: /cabinet");
        }
        $imageinfo = getimagesize($file['tmp_name']);//[tmp_name] берем из $_FILES['photo'] это пареметр показывает временый адресс зпгружаемого файла
        if ($imageinfo['mime'] != 'image/gif' and //убеждаемся что тип файла подходит для фото
            $imageinfo['mime'] != 'image/jpg' and
            $imageinfo['mime'] != 'image/jpeg' and
            $imageinfo['mime'] != 'image/png'
        ){
            $_SESSION['notFile'] = 'не тот формат,не обманешь';
            header("Location: /cabinet");
        }
        if ($file['size'] == 0 or $file['size']> 1000000000){//проверяем размер загружаемого файла
            $_SESSION['notFile'] = 'большой размер файла';
            header("Location: /cabinet");
        }
        $newDir = 'loadPhoto';
        if (!file_exists($newDir)) {//проверяем существует ли папка для сохранения файлов. file_exists это функция проверяет существует или нет
            mkdir($newDir, 777);// если нет такой то создаем папку .в () первое значение где создаем, второе это права на папку
        }
        $type=strtolower(strrchr($file['name'], '.'));//strtolower переводит все буквы в маленькие(без заглавных) вдруг будет JPG
        // strrchr показывает текст который идет после символа указанного в () вторым значением ,у нас это точка '.'
        $filename = uniqid('image_');// генерируем уникальное имя для файла,в скобках префикс  нового имени
        $saveDir='/loadPhoto';//в какую папку сохранять
        $file_dist=$_SERVER['DOCUMENT_ROOT'].$saveDir.'/'.$filename.$type;//это прописываем адрес и имя нового файла кудп будем сохранять
        $imageResize=Image::make($file['tmp_name'])->resize(300, null);//делаем ресаиз картинки с помощью библиотеки

        if(!move_uploaded_file($file['tmp_name'],$file_dist)) {//move_uploaded_file это функция перемещения загр файла, в скобках первое хначение это где временное хранение файла
            $_SESSION['notFile']='не удалось сохранить файл';
            header("Location: /cabinet");
        }
        $this->incomeSrc=$saveDir.'/'.$filename.$type;

    }

}
