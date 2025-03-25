<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicePointsController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::controller(WebController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/service/detail/{service_id}', 'serviceDetail')->name('service.details');
});

Route::middleware(['auth'])->group(function () {


    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //Service Routes
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/services/index', 'index')->name('services.index');
        Route::post('/serverice/store', 'store')->name('store.service');
        Route::get('/serverice/show/{id}', 'show')->name('show.service');
        Route::put('/serverice/update/{service_id}/{oldImage}', 'update')->name('update.service');
        Route::delete('/serverice/delete/{id}/image/{image}', 'destory')->name('delete.service');

        //Images
        Route::post('/image/store/{service_id}', 'storeServiceImage')->name('store.service.image');
        Route::get("/image/edit/{id}", 'editImage')->name('edit.service.image');
        Route::put("/image/update/{imageID}/{oldServiceImage}", 'updateServiceImage')->name('update.service.image');
        Route::delete('/image/delete/{id}/{image}', 'deleteServiceImage')->name('delete.service.image');
    });

    //Service Points Routes
    Route::controller(ServicePointsController::class)->group(function () {

        Route::post('/points/{service_id}', 'create')->name('store.point');
        Route::get('/point/edit/{id}', 'edit')->name('edit.point');
        Route::put('/point/update/{id}', 'update')->name('update.point');
        Route::delete('/point/delete/{id}', 'delete')->name('delete.point');
    });

    //Project Routes
    Route::controller(ProjectController::class)->group(function () {

        Route::get('/projects/index', 'index')->name('project.index');
        Route::post('/project/store', 'store')->name('store.project');
        Route::get('/project/show/{id}', 'show')->name('show.project');
        Route::delete('project/delete/{id}/{oldImage}', 'deleteProject')->name('delete.project');
    });
});
