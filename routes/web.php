<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ContactController;



Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['register' => false, 'verify' => false]);
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix'=>'admin'] , function(){
        Route::get('contacts/json',[ContactController::class, 'json'])->name('admin.contact.json');
        Route::resource('contacts', ContactController::class, ['as' => 'admin']);
        Route::post('contacts/import',[ContactController::class, 'importContacts'])->name('admin.contacts.import');
    });

});

Auth::routes();
