<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController{

    public function IndexAction() {
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        //debug($post);
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Mike'];
        $cache = Cache::instance();
        //$cache->set('test', $name);
        //$cache->delete('test');
        $data = $cache->get('test');
        if(!$data) {
            $cache->set('test', $names);
        }
        debug($data);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }

}