<?php
namespace app\controllers;
use lib\controller;

class homeController extends controller{

    public function index(){
       
        return $this->view('main', ['title'=>'Home']);
    }
}
?>