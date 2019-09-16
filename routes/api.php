<?php

use Illuminate\Http\Request;

// Route::namespace('Api')->name('api.')->group(function () {
   
   
    Route::apiResources([
        'aula' => 'Api\AulaController',
        'categoria' => 'Api\CategoriaController',
        'curso'  => 'Api\CursoController'
        ]);
    


// });

