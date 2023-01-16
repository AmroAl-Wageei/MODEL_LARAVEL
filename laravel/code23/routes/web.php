<?php

use App\Http\Controllers\about;
use App\Http\Controllers\New_Patients;
use App\Http\Controllers\news;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\invokController;


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


 # php artisan serve --port=----
//##########################    //Make Routing

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('aboutus');
// });

// Route::get('/contact', function () {
//     return view('contactus');
// });
// Route::get('/anchor', function () {
//     return view('anchor');
// });

// Route::get('/test', function () { //Parameter Route
//     return 'Hala Walah';
// });
// Route::get('/test1/{id}', function ($id) {
//     return $id . 'require';
// });
// Route::get('/test2/{id?}', function () {
//     return 'Optional';
// });

Route::get('/Show-one/{id}', function ($id) { //Named Route
    return $id;
})->name('one');

Route::get('/Show-two', function () {
    return 'Hala Walah';
})->name('two');

//##########################

// Route::view('abd', 'aboutus'); //Short Hand (url , page name)

// Route::view('student', 'student');


// Route::view('student', 'student' , [

//     'student_title' => 'Orange Coding Academy',
//     'student_name' =>  'Amro - Ahmad - Shaima - Baraa - Isra',
//     'student_desc' => 'This is smart team'

// ]);


// Route::view('test', 'test');

// Route::view('Team', 'Team');

// Route::view('header', 'layout/header');

// Route::view('footer', 'layout.footer');


//##########################

// Route::get('/{name}', function ($name) {    //Pass data with routing
//     echo $name;
//     return view('welcome');
// });
// Route::get('/{name}', function ($name) { //Pass data with routing use page element
//     return view('welcome' , ['name' => $name ]);
// });

//##########################

// Route::get('/', function () {       //Redirect
//     return redirect ('contact');
// });

//##########################

// Route::get('path' , 'controller file');  //Controller
// Route::get('users/{name}', [Users::class, 'index']); //With call parameter

// Route::get('ahmad', [about::class, 'player']);

// Route::get('sami', [Front::class, 'ShowFrontName']);
//##########################

// Route::group(['prefix' => 'userss'],function(){

//     Route::get('/' , function() {
//         return "100 100";
//     });
//     Route::get('show' , [Front::class , 'ShowFrontName']);
//     Route::delete('delete' , [Front::class , 'ShowFrontName']);
//     Route::get('edit' , [Front::class , 'ShowFrontName']);
//     Route::put('update' , [Front::class , 'ShowFrontName']);

// });

//##########################

// Route::get('check', function () {

//     return 'middlware';
// })->middleware('auth');

// Route::group(['prefix' => 'userss', 'middleware' => 'auth'], function () {

//     //set of routes

//     Route::get('/', function () {
//         return "100 100";
//     });
//     Route::get('show', [Front::class, 'ShowFrontName']);
//     Route::delete('delete', [Front::class, 'ShowFrontName']);
//     Route::get('edit', [Front::class, 'ShowFrontName']);
//     Route::put('update', [Front::class, 'ShowFrontName']);

// });

//##########################

//NameSpace

// Route::namespace('App\Http\Controllers\Front')->group(function(){   //nameSpace
//         Route::get('Moh','Admin@name');
//         Route::get('sara','Userr@name');
// });

// Route::get('farah',[about::class , 'player']);

// Route::get('sho',[about::class , 'showw']);

// Route::group(['namespace' => 'userss'], function () {
//     Route::get('show', 'Admin@name');
// });

//##########################

// Route::group(['middleware' => 'auth'], function () {

//     //set of routes

//     Route::get('/', function () {
//         return "100 100";
//     });
// });

// Route::get('yes' , [Front::class, 'ShowFrontName'])->middleware('auth');

// Route::get('login' , function(){
//     return 'You must have login befor go to website';
// })->name('login');

//##########################

//Resources

// Route::get('news', 'ControllerName@show');
// Route::post('news', 'ControllerName@store');
// Route::get('news/create', 'ControllerName@create');
// Route::get('news/{id}edit', 'ControllerName@edit');
// Route::post('update/{id}news', 'ControllerName@update');
// Route::delete('news/{id}', 'ControllerName@delete');

//php artisan make:controller Name --resource


// Route::resource('news','App\Http\Controllers\news');

// Route::resource('news','App\Http\Controllers\order');

//#######################################################################

//10 - 1 - 2-23 

// Route::get('/contact', function () {
//     $name  = ['Amro ', 'Ahmad' , 'Shaima', 'Baraa' , 'Isra'];
//     $title = 'Welcome to our team';
//     return view('contactus' , compact("name" , "title"));
// });
// Route::get('/about', function () {
//     $name  = ['sami ', 'leen' , 'hanne', 'ruba' , 'Isra'];
//     $title = 'Welcome to our team';
//     return view('aboutus' , with (["name" => $name  , "title" => $title ]));
// });
// Route::get('/anchor', function () {
//     $name  = ['sami ', 'leen' ];
//     $title = 'Welcome to our anchor';
//     return view('anchor' , ['name'=>$name  , 'title' => $title ]);
// });

//#######################################################################







































//Controller 
# We must have controller every start project

// Route::get('/post' , function() {

//     $post = 'Amro Salah';
//     return view('Team' , compact('post'));
// });


// Route::get('/post', function () {
//     $post = "Amro";
//     return view('post' , compact('post'));
// });

// Route::get('/post' , function() {

//     $post = "Samiiiiiiiiiii";
// return view('post' , compact('post'));
// });

// Route::get('Users' , [Users::class , 'index']);


#1
// Route::get('patients' , [App\Http\Controllers\Patients::class , 'New_patients']);
// Route::get('patients/create' , [App\Http\Controllers\Patients::class , 'Create_patients']);
// Route::get('patients/edit' , [App\Http\Controllers\Patients::class , 'Edit_patients']);
// Route::get('patients/delete' , [App\Http\Controllers\Patients::class , 'Delete_patients']);


#2
// Route::controller(App\Http\Controllers\Patients::class)->group( function(){

// Route::get('/patients' , 'New_patients');
// Route::get('/patients/create' , 'Create_patients');
// Route::get('/patients/edit/{id}' , 'Edit_patients');
// Route::get('/patients/delete/{id}' , 'Delete_patients');
// });

#3 
# php artisan make:controller controllerName --resource
# php artisan make:controller controllerName -r

##Normal
// Route::resource('Orange' ,(New_Patients::class));

##except
Route::resource('new' , news::class )->except([
    'show' , 'create'
]);

##only
// Route::resource('new' , news::class )->only([
//     'create'
// ]);

##Construct : cant access without login
// Route::resource('new' , news::class )->middleware('auth');


##  invoke , single action
#   php artisan make:controller ProvisionServer --invokable

// Route::get('invok' , invokController::class );
// Route::get('invok' , [invokController::class , '__invoke' ]);
// Route::get('invok' , invokController::class , 'Team');










































##########################################################

//Migrations


# php artisan migrate
# php artisan migrate:status
# php artisan migrate --force
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