<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Theme2\AboutController as Theme2AboutController;
use App\Http\Controllers\Theme2\HomeController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['visitor'])->group(function () {
    
    Route::prefix('/')->group(function () {
        if(env('theme',"theme1")=="theme1"){
            
            Route::view('/', 'index');
            Route::get('/welcome', function () {
                if(env('theme',"")=="theme1"){
                    return view('theme1.index');
                }
                return view('welcome');
            });
            Route::get('/portfolio', [GallaryController::class, 'index'])->name('gallary');
            Route::get('/works', [ProjectController::class, 'index'])->name('projects');
            Route::get('/services', [ServiceController::class, 'index'])->name('services');
            Route::get('/contact', [ContactController::class, 'index'])->name('contact');
            Route::get('/about', [AboutController::class, 'index'])->name('about');
        }else if(env('theme',"theme1")=="theme2"){
            Route::name("theme2.")->group(function(){
             Route::post('message',  [HomeController::class,'message'])->name('message');

                Route::get('', [HomeController::class,'index'])->name('home');
                Route::get('about', [HomeController::class,'about'])->name('about');
                Route::get('services', [HomeController::class,'services'])->name('services');
                Route::get('contact', [HomeController::class,'contact'])->name('contact');
            });
        
        }
    });
});


Route::match(['GET', 'POST'], 'admin/login', [UserAuthController::class, 'login'])->name('admin.login');
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function(){
        Route::view('/dashboard', 'dashboard')->name('dashboard');
        Route::get('logout',[UserAuthController::class, 'logout'])->name('admin.logout');

        Route::prefix('carousels')->group(function () {
            Route::get('/add', [CarouselController::class, 'index'])->name('carousel.add');
            Route::post('/add', [CarouselController::class, 'submit'])->name('carousel.submit');
            // Route::get('/edit', [CarouselController::class, 'edit'])->name('carousel.edit');
            // Route::post('/edit/{carousel}',[CarouselController::class, 'update'])->name('carousel.update');
            Route::match(['get', 'post'], '/edit/{carousel}', [CarouselController::class, 'edit'])->name('carousel.edit');
            Route::get('/delete/{carousel}',[CarouselController::class, 'delete'])->name('carousel.delete');
        });

        Route::prefix('gallary')->group(function () {
            Route::get('/add', [GallaryController::class, 'add'])->name('gallary.add');
            Route::post('/add', [GallaryController::class, 'submit'])->name('gallary.submit');
            Route::post('/edit/{gallary}',[GallaryController::class, 'edit'])->name('gallary.edit');
            Route::get('/delete/{gallary}',[GallaryController::class, 'delete'])->name('gallary.delete');
        });

        Route::prefix('projects')->group(function () {
            Route::get('/add', [ProjectController::class, 'add'])->name('projects.add');
            Route::post('/add', [ProjectController::class, 'submit'])->name('projects.submit');
            Route::post('/edit/{project}', [ProjectController::class, 'edit'])->name('projects.edit');
            Route::get('/delete/{project}', [ProjectController::class, 'delete'])->name('projects.delete');
        });

        Route::prefix('services')->group(function () {
            Route::get('/add', [ServiceController::class, 'add'])->name('services.add');
            Route::post('/add', [ServiceController::class, 'submit'])->name('services.submit');
            Route::post('/edit/{service}',[ServiceController::class, 'edit'])->name('services.edit');
            Route::get('/delete/{service}',[ServiceController::class, 'delete'])->name('services.delete');
        });

        Route::match(['GET','POST'],'/setting', [Theme2AboutController::class, 'setting'])->name('setting');

        Route::prefix('about')->group(function () {
            Route::get('', [Theme2AboutController::class, 'list'])->name('about.list');
            Route::match(['GET','POST'],'/add', [Theme2AboutController::class, 'add'])->name('about.add');
            Route::match(['GET','POST'],'/edit/{about}', [Theme2AboutController::class, 'edit'])->name('about.edit');
            Route::get('/delete/{about}',[Theme2AboutController::class, 'delete'])->name('about.delete');
        });

    });

});
