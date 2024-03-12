<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehiculeContoller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChauffeurContoller;
use App\Http\Controllers\LocationContoller;


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

//Route::get('/', function () {
  //  return view('welcome');
//});
// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', function () {
    $vehicules = App\Models\Vehicule::all(); // Récupère tous les véhicules
    $locations = App\Models\Location::all(); // Récupère tous les locations
    $users = App\Models\User::all(); // Récupère tous les users
    $chauffeurs = App\Models\Chauffeur::all(); // Récupère tous les véhicules
    return view('home', compact('vehicules','locations','users','chauffeurs'));
})->name('home');

//Route::get('/reservation', [HomeController::class,'reservation']);

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');


});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
    Route::get('/reservation', [HomeController::class,'reservation'])->name('reservation');
});

// Route::middleware(['auth', 'user-access:user'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//     Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');

//     Route::get('/reservation', [LocationContoller::class,'reservation'])->name('reservation');;
//    Route::get('/achat', [VehiculeContoller::class, 'achat'])->name('achat');
// });


Route::get('/admin/vehicules', [VehiculeContoller::class, 'index'])->name('admin/vehicules');
Route::get('/admin/vehicules/create', [VehiculeContoller::class, 'create'])->name('admin/vehicules/create');
Route::post('/admin/vehicules/store', [VehiculeContoller::class, 'store'])->name('admin/vehicules/store');

Route::get('/admin/vehicules/show/{id}', [VehiculeContoller::class, 'show'])->name('admin/vehicules/show');
Route::get('/admin/vehicules/edit/{id}', [VehiculeContoller::class, 'edit'])->name('admin/vehicules/edit');
Route::put('/admin/vehicules/edit/{id}', [VehiculeContoller::class, 'update'])->name('admin/vehicules/update');
Route::delete('/admin/vehicules/destroy/{id}', [VehiculeContoller::class, 'destroy'])->name('admin/vehicules/destroy');
//Route::get('/achat', [VehiculeContoller::class, 'achat'])->name('achat');


Route::get('/admin/chauffeurs', [ChauffeurContoller::class, 'index'])->name('admin/chauffeurs');
Route::get('/admin/chauffeurs/create', [ChauffeurContoller::class, 'create'])->name('admin/chauffeurs/create');
Route::post('/admin/chauffeurs/store', [ChauffeurContoller::class, 'store'])->name('admin/chauffeurs/store');

Route::get('/admin/chauffeurs/show/{id}', [ChauffeurContoller::class, 'show'])->name('admin/chauffeurs/show');
Route::get('admin/chauffeurs/{id}/edit',[ChauffeurContoller::class,'edit'])->name('admin/chauffeurs/edit');
Route::put('admin/chauffeurs/{id}/update',[ChauffeurContoller::class,'update'])->name('admin/chauffeurs/update');
Route::delete('/admin/chauffeurs/destroy/{id}', [ChauffeurContoller::class, 'destroy'])->name('admin/chauffeurs/destroy');

//-----------------------------------
// Route::get('/liste-Candidat', [CandidatController::class,'liste_Candidat'])->name('listeCandidat');
// Route::get('/candidat/create', [CandidatController::class,'create']) ->name('Candidat.create');
// Route::post('/candidat/store', [CandidatController::class,'store']) ->name('Candidat.store');

// Route::get('candidat/{id}/edit',[CandidatController::class,'edit'])->name('modifie');
// Route::put('candidat/{id}/update',[CandidatController::class,'update'])->name('misAjour');
// Route::delete('candidat/{id}/delete',[CandidatController::class,'destroy'])->name('supprimer');
// Route::get('candidat/{id}/show',[CandidatController::class,'show'])->name('afficheDetail');


//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');

    // Route::get('/admin/vehicules', [VehiculeContoller::class, 'index'])->name('admin/vehicules');
    // Route::get('/admin/vehicules/create', [VehiculeContoller::class, 'create'])->name('admin/vehicules/create');
    // Route::post('/admin/vehicules/store', [VehiculeContoller::class, 'store'])->name('admin/vehicules/store');
    // Route::get('/admin/vehicules/show/{id}', [VehiculeContoller::class, 'show'])->name('admin/vehicules/show');
    // Route::get('/admin/vehicules/edit/{id}', [VehiculeContoller::class, 'edit'])->name('admin/vehicules/edit');
    // Route::put('/admin/vehicules/edit/{id}', [VehiculeContoller::class, 'update'])->name('admin/vehicules/update');
    // Route::delete('/admin/vehicules/destroy/{id}', [VehiculeContoller::class, 'destroy'])->name('admin/vehicules/destroy');

    // chauffeur
    // Route::get('/admin/chauffeurs', [ChauffeurContoller::class, 'index'])->name('admin/chauffeurs');
    // Route::get('/admin/chauffeurs/create', [ChauffeurContoller::class, 'create'])->name('admin/chauffeurs/create');
    // Route::post('/admin/chauffeurs/create', [ChauffeurContoller::class, 'store'])->name('admin/chauffeurs/store');
    // // Route::get('/admin/chauffeurs/{id}/edit', [ChauffeurContoller::class, 'edit'])->name('admin/chauffeurs/edit');

    // Route::get('admin/chauffeurs/{id}/edit',[ChauffeurContoller::class,'edit'])->name('admin/chauffeurs/edit');

    // // Route::get('/admin/chauffeurs/edit/{id}', [ChauffeurContoller::class, 'edit'])->name('admin/chauffeurs/edit');
    // Route::put('admin/chauffeurs/{id}/update',[ChauffeurContoller::class,'update'])->name('admin/chauffeurs/update');
    // // Route::put('/admin/chauffeurs/edit/{id}', [ChauffeurContoller::class, 'update'])->name('admin/chauffeurs/update');
    // Route::delete('/admin/chauffeurs/destroy/{id}', [ChauffeurContoller::class, 'destroy'])->name('admin/chauffeurs/destroy');

    // // location
    // Route::get('/admin/locations', [LocationContoller::class, 'index'])->name('admin/locations');
    // Route::get('/admin/locations/create', [LocationContoller::class, 'create'])->name('admin/locations/create');
    // Route::post('/admin/locations/store', [LocationContoller::class, 'store'])->name('admin/locations/store');
    // Route::get('/admin/locations/show/{id}', [LocationContoller::class, 'show'])->name('admin/locations/show');
    // Route::get('/admin/locations/edit/{id}', [LocationContoller::class, 'edit'])->name('admin/locations/edit');
    // Route::put('/admin/locations/edit/{id}', [LocationContoller::class, 'update'])->name('admin/locations/update');
    // Route::delete('/admin/locations/destroy/{id}', [LocationContoller::class, 'destroy'])->name('admin/locations/destroy');

});
 // location
 Route::get('/admin/locations', [LocationContoller::class, 'index'])->name('admin/locations');
 Route::get('/admin/locations/create', [LocationContoller::class, 'create'])->name('admin/locations/create');
 Route::post('/admin/locations/store', [LocationContoller::class, 'store'])->name('admin/locations/store');
 Route::get('/admin/locations/show/{id}', [LocationContoller::class, 'show'])->name('admin/locations/show');
 Route::get('/admin/locations/edit/{id}', [LocationContoller::class, 'edit'])->name('admin/locations/edit');
 Route::put('/admin/locations/edit/{id}', [LocationContoller::class, 'update'])->name('admin/locations/update');
 Route::delete('/admin/locations/destroy/{id}', [LocationContoller::class, 'destroy'])->name('admin/locations/destroy');

//Route::get('/home',[HomeController::class, 'index'])->name('home');
