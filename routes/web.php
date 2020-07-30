<?php
use App\Page;
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

// Route For Homepage

Route::get('/', function () {
    $home = Page::find(1);
    return view('home',compact('home'));
});

// Auth Routes
Auth::routes();

// Pages Routes, Only can accessed by Admin

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {

    // Admin Dashboard Routes
    Route::get('/', 'AdminController@index')->name('admin-dashboard');

    // Routes for pages CRUD opration, Admin can Access

    Route::any('/pages/create','AdminController@create')->name('pages.new');
    Route::post('/pages/create','AdminController@store')->name('pages.store');
    Route::any('/pages','AdminController@pagelist')->name('pages.pagelist');
    Route::any('/pages/{slug}','AdminController@show')->name('pages.display');
    Route::any('/pages/edit/{slug}','AdminController@edit')->name('pages.editpage');
    Route::any('/pages/delete/{slug}','AdminController@destroy')->name('delete_page');
    Route::post('pages/update/{slug}','AdminController@update')->name('update-page');
    Route::put('pages/status/{slug}','AdminController@status')->name('status-page');

   // Routes for Faq CRUD opration, Admin can Access
  
   Route::any('/faq/create','admin\FaqController@create')->name('faq.new');
   Route::Post('/faq/create','admin\FaqController@store')->name('faq.store');
   Route::any('/faq/edit/{id}','admin\FaqController@edit')->name('faq.edit');
   Route::Post('/faq/update/{id}','admin\FaqController@update')->name('faq.update');
   Route::any('/faq/delete/{id}','admin\FaqController@destroy')->name('delete_faq');
   Route::get('/faqs','admin\FaqController@index')->name('faq.list');


    //Routes for Category Crud Operation start here

    Route::get('/categories','admin\BlogCatController@index')->name('cat.list');
    Route::any('/category/create','admin\BlogCatController@create')->name('blogcat.new');
    Route::Post('/category/create','admin\BlogCatController@store')->name('blogcat.store');
    Route::any('/category/edit/{slug}','admin\BlogCatController@edit')->name('blogcat.edit');
    Route::any('/category/delete/{slug}','admin\BlogCatController@destroy')->name('delete_cat');
    Route::Post('/category/update/{slug}','admin\BlogCatController@update')->name('blogcat.update');
    Route::put('category/status/{slug}','admin\BlogCatController@status')->name('category-status');

    //Routes for Category Crud Operation end here



    // Routes for Blog CRUD opration, Admin can Access

    Route::any('/blog/create','admin\BlogController@create')->name('blog.new');
    // Route::Post('/blog/create','admin\BlogController@store')->name('blog.store');
    // Route::any('/blog/edit/{id}','admin\BlogController@edit')->name('blog.edit');
    // Route::Post('/blog/update/{id}','admin\BlogController@update')->name('blog.update');
    // Route::any('/blog/delete/{id}','admin\BlogController@destroy')->name('delete_blog');
    // Route::get('/blog','admin\BlogController@index')->name('faq.list');


});

// Routes for Homepage

Route::get('/home', 'HomeController@index')->name('home');

// Routes for Admin Login 

Route::get('admin/login','admin\loginController@loginfunc')->name('admin-login');


Route::post('admin/login','admin\loginController@login')->name('admin-logged');

// Routes for Display Pages details 

Route::any('/{slug}','AdminController@show')->name('pages.display');