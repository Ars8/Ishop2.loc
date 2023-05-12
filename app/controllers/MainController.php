<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController{

    public function IndexAction() {
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
    }

}