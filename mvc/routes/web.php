<?php

use lib\Route;
use app\controllers\homeController;

//Cargar la ruta raiz desde homeController
Route::get("/", [homeController::class, "index"]);

Route::dispatch();
?>