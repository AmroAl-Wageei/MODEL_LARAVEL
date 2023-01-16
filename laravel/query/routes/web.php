<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/create', [PostController::class, 'create']);
Route::post('post/insert', [PostController::class, 'insert'])->name('post.insert');

##########################################################





//Migrations

# php artisan migrate
# php artisan migrate:status
# php artisan migrate --forc
# php artisan migrate --pretend
# php artisan migrate --isolated

// Create Table
# php artisan make:migration create_coaches_table
# php artisan make:migration createflightstable  --> without schema and update,delete at

//rollback , reset
# php artisan migrate:rollback
# php artisan migrate:rollback --step=5
# php artisan migrate:reset

//fresh , refresh
# php artisan migrate:fresh   -->   Dropping all tables       /  Creating migration table
# php artisan migrate:refresh -->   Rolling back migrations  /   Creating migration table

//Add Colum , up , down
// Up   : like insert in table befor or after but it cant delete when i use rollback
// dpwn : like delete in table bwhen i use rollback or drop , delete
# php artisan make:migration add_ColumName_to_TableName_table

//Forign Key








##########################################################
