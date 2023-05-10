<?php

namespace app\controllers;

class MainController extends AppController{

    //public $layout = 'test';

    public function IndexAction() {
        //echo __METHOD__;
        //$this->layout = 'test';
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane',];
        $this->set(compact('name', 'age', 'names'));
    }

}