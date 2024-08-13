<?php
namespace src\controllers;

use \core\Controller;


class HomeController extends Controller {


    //esse é o metodo que SETEI la em ROTAS;
    public function index() {
        $this->render('home', ['nome' => 'Patricio']);
    }

    public function fotos() {
       
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}