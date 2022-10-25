<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserportfolioController;


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

/*
SOCIAL MEDIA USER
1. single data social media user
2.Created a  platform from listing
3.Read where the user can readable for their data in social media in short summary
4.Update where the user can update their social media for latest one
5.Delete where the user can delete their social media for latest 1 and to update new one
*/

Route::get('/', function () {
    return view('welcome');
});

//users portfolio general


//users platform eitehr on facebook,instagram,twitter and their contact number
//mainhomepage
Route::get('/homepage', function () {return view('welcome');})->name('homepage');

//task need to complete the project
/*
1.design page user
2.generate fake data
3.CRUD fake data
4.authethication
5. simplfied the coding
*/
Route::namespace('User')->group(function() {

    //load page will continue to homepage within 1 click by users
    Route::get('/loadpage', function() {return view('Userportfolio.loading');})->name('loading');
    Route::get('/register', function() {return view('layout.register');})->name ('register');
    Route::get('/loginpage', function () {return view('layout.loginpage');})->name('login');
    Route::get('/user', function() { return view('Userportfolio.portfolio');})->name('user');
    Route::get('/facebook', function () {return view('Userportfolio.facebookpage');})->name('facebook');
    Route::get('/twitter', function () {return view('Userportfolio.twitterpage');})->name('twitter');
    Route::get('/instagram', function () {return view('Userportfolio.instagrampage');})->name('instagram');
    Route::get('/myresume', function () {return view('User.singleuser');})->name('myresume');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
 
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('user.listinguser');
        })->name('adminDashboard');
 
    });
});
// middleware admin = login admin
// 
// resume project 
//users -> homepage
//homepage->users
   // Route::get('/userlisting', [UserportfolioController::class,'index']);
    Route::get('/userupdate', [UserportfolioController::class,'update'])->name('update');

    Route::get('/users/{id}', [UserportfolioController::class, 'show']);
// register 

/* data FLOW for users & admin
single data <- which the user can see their  data personal portfolio
list data<- where admin can CRUD the data
update data<- where the admin can update the name,brithday,address,working experience and the picture
delete data<- where the admin can delete the name,birthday,address,working experience and the picture
created data<- where the admin can add new users to register as new users
*/
///search users still in progress
Route::get('/searchuser', function () {return view('livewire.search-user');});

// displaylist data




//display 1 data + list of my data personal porfolio



//Route::get('/livewire', function(){return view('livewire.counter');});


//can do the grouping the element for route within same classes 
//can do the grouping middleware to more shorcut for the get url


//delete

//updated



 