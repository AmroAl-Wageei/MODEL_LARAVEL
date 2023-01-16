<?php

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


// Model

// Create Model
# php artisan make:model ModelName

// Create Table
# php artisan make:migration create_TableName_table

// Create Model and Table at the sametime
# php artisan make:model ModelName -m
# php artisan make:model ModelName --migration  

// Create Model and Table and Controller at the sametime but without CRUD in Controller
# php artisan make:model ModelName -mc

// Create Model and Table and Controller at the sametime but with CRUD in Controller
# php artisan make:model ModelName -mcr

# php artisan make:model Flight -mfsc
# php artisan make:model Flight --all


// INSIDE THE MODEL 

# protected $table = 'my_flights';
# public $timestamps = false;
# protected $primaryKey = 'flight_id';
# public $incrementing = false;

# protected $keyType = 'string';
# protected $dateFormat = 'U';
# protected $connection = 'sqlite';



##########################################################


# Store like insert