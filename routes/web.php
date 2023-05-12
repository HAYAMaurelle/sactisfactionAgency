<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inscription;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/inscription', [Inscription::class, 'store'])->name('inscription.store');

Route::get('/appartements', function () {
    return view('property-grid');
});

Route::get('/contact', function(){
    return view('contact');
}
);
Route::get('/send-email', function(){
    return view('send-email');
}
);
Route::get('/inscription', function(){
    return view('inscription');
}
);
Route::get('/connecter', function(){
    return view('connecter');
}
);
Route::post('/contact', [ContactController::class,'send'])->name('contact.send');


Route::get('/appartements/{id}', function () {
    return view('property-single');
});

Route::get('/hebergeurs', function () {
    return view('hebergeur');
});

Route::get('/gestheb', function () {
    return view('gestheb');
});

/*Route::get('/', function () {
    return view('forminscription');
});*/

/*
if()
{
    Route::get('/register',
    [RegisteredUserController::class,'create'] )
                ->middleware(['guest'])
                ->name(['register']);
    //return view('register');
    Route::post('/register',
    [RegisteredUserController::class,'store'] )
                ->middleware(['guest']);


}*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
