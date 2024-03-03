<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect'] )->name('redirect');
Route::get('/', [HomeController::class, 'index'] );

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Product Category management

    Route::get('/all-categories', [CategoryController::class, 'allCategories'])->name('all-categories');    
    Route::get('/create-category', [CategoryController::class, 'createCategory'])->name('create-category');
    Route::post('store-category', [CategoryController::class, 'storeCategory'])->name('store-category');
    Route::get('edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::put('update-category/{id}', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::delete('delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    //User management
    
    Route::get('all-users', [UserController::class,'allUsers'])->name('all-users');
    Route::get('create-users', [UserController::class,'createUsers'])->name('create-user');
    Route::post('store-user', [CategoryController::class, 'storeUser'])->name('store-user');

});

require __DIR__.'/auth.php';
