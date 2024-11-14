<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\editor\AuthController;
use App\Http\Controllers\editor\HomeController;
use App\Http\Controllers\editor\UserController;
use App\Http\Controllers\editor\ContactController;
use App\Http\Controllers\editor\MasterHeadController;
use App\Http\Controllers\editor\MasterCarouselController;

Route::controller(PublicController::class)->group(function (){
    route::get('/','index')->name('public');
    route::get('/about','about')->name('public.about');
    route::get('/menu','menu')->name('public.menu');
    route::get('/store','store')->name('public.store');
    route::get('/partnership','partnership')->name('public.partnership');
    route::get('/activation/bigorder','bigorder')->name('public.bigorder');
    route::get('/activation/bangor-berbagi','bangorberbagi')->name('public.bangor-berbagi');
    route::get('/activation/bangor-goestoschool','bangorgoestoschool')->name('public.bangor-goestoschool');
    route::get('/activation/bangor-goestoevent','bangorgoestoevent')->name('public.bangor-goestoevent');
    route::get('/activation/bangor-funcookingclass','bangorfuncookingclass')->name('public.bangor-funcookingclass');
    route::get('/activation/bangor-funstreetactivation','bangorstreetactivation')->name('public.bangor-streetactivation');
    route::get('/contact','contact')->name('public.contact');
    route::post('send/contact','storeMessage')->name('send.contact');

    route::get('data','getData')->name('public.data');
});

Route::controller(AuthController::class)->middleware('guest')->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/auth','authenticate')->name('login.auth');
});

Route::prefix('editor')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::post('logout','logout')->name('logout');
    });

    Route::controller(HomeController::class)->group(function(){
        Route::get('/','index')->name('editor.home');
        Route::get('notif','notification')->name('editor.notif');
    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/users','index')->name('editor.users');
        Route::get('/users/data','getData')->name('editor.users.data');
        Route::post('/users/store','storeData')->name('editor.users.store');
        Route::get('/users/detail','detail')->name('editor.users.detail');
        Route::post('/users/update','updateData')->name('editor.users.update');
        Route::delete('/users/delete','deleteData')->name('editor.users.delete');
    });

    Route::controller(MasterHeadController::class)->group(function(){
        Route::get('/master-head','index')->name('editor.master-head');
        Route::get('/master-head/data','getData')->name('editor.master-head.data');
        Route::post('/master-head/store','storeData')->name('editor.master-head.store');
        Route::get('/master-head/detail','detail')->name('editor.master-head.detail');
        Route::post('/master-head/update','updateData')->name('editor.master-head.update');
        Route::delete('/master-head/delete','deleteData')->name('editor.master-head.delete');
    });
    Route::controller(MasterCarouselController::class)->group(function(){
        Route::get('/master-carousel','index')->name('editor.master-carousel');
        Route::get('/master-carousel/data','getData')->name('editor.master-carousel.data');
        Route::post('/master-carousel/store','storeData')->name('editor.master-carousel.store');
        Route::get('/master-carousel/detail','detail')->name('editor.master-carousel.detail');
        Route::post('/master-carousel/update','updateData')->name('editor.master-carousel.update');
        Route::delete('/master-carousel/delete','deleteData')->name('editor.master-carousel.delete');
    });

    Route::controller(ContactController::class)->group(function(){
        Route::get('/contact','index')->name('editor.contact');
        Route::get('/contact/data','getData')->name('editor.contact.data');
        Route::delete('/contact/delete','deleteData')->name('editor.contact.delete');
    });
});
