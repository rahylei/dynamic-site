<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SubModuleController;
use App\Models\Module;
use App\Models\SubModule;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*-- rutas dinamicas publicas para submodulos... --*/

if (Schema::hasTable('sub_modules')) {

    if(!blank(SubModule::all())){
        foreach(SubModule::all() as $submodule){
            Route::get('/'.$submodule->route.'/{submodule}', [AdminController::class, 'submodule'])->name($submodule->route);
        }
    }
}

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/layout', [AdminController::class, 'layout'])->name('layout');
    Route::resource('modules', ModuleController::class);
    Route::resource('modules.submodules', SubModuleController::class);

    /*-- implementacion de rutas dinamicas...*/
    if (Schema::hasTable('modules')) {

        if(!blank(Module::all())){
            foreach(Module::all() as $module){
                Route::get('/'.$module->route.'/{module}', [AdminController::class, 'module'])->name($module->route);
            }
        }
    }
        

});
