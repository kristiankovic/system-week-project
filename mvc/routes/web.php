<?php

use lib\Route;
use app\controllers\homeController;

//Cargar la ruta raiz desde homeController
Route::get("/", [homeController::class, "index"]);
Route::get("/inaguracion", [homeController::class, "inaguracion"]);
Route::get("/talleres", [homeController::class, "talleres"]);
Route::get("/torneo", [homeController::class, "torneo"]);
Route::get("/pupuseada", [homeController::class, "pupuseada"]);

Route::dispatch();
?>