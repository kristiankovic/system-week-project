<?php
namespace app\controllers;
use lib\controller;

class homeController extends controller{

    public function index(){
       
        return $this->view('main', ['title'=>'Home']);
    }

    public function inaguracion(){
        return $this->view('inaguracion', ['title'=>'Inaguracion']);
    }

    public function talleres(){
        return $this->view('talleres', ['title'=>'Talleres']);
    }

    public function torneo(){
        return $this->view('torneo', ['title'=>'Torneo']);
    }

    public function feriaLogros(){
        return $this->view('feria-logros', ['title'=>'Pupuseada']);
    }
}
?>