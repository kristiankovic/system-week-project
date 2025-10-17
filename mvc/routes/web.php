<?php

use lib\Route;
use app\controllers\homeController;

//Cargar la ruta raiz desde homeController
Route::get("/", [homeController::class, "index"]);
Route::get("/inaguracion", [homeController::class, "inaguracion"]);
Route::get("/talleres", [homeController::class, "talleres"]);
Route::get("/torneo", [homeController::class, "torneo"]);
Route::get("/feria-logros", [homeController::class, "feriaLogros"]);
Route::get("/bingo", [homeController::class, "bingo"]);

Route::dispatch();
?>