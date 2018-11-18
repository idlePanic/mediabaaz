<?php

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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', 'HomeController@index');




Auth::routes();
//Route::get('/',function (){
//    return view('index');
//});

//Route::post('admin/edit_roles/{id}','AdminController@editRoles');
//Route::post('admin/edit_roles/{id}','AdminController@editRoles');

Route::group(['prefix'=>'/admin', 'middleware'=>'admin'],function (){
    Route::get('/','AdminController@index')->name('admin.index');
    Route::get('/movie_managing','AdminController@movieManaging')->name('admin.movieManaging');
    Route::get('/show_admins','AdminController@showAdmins')->name('admin.showAdmins');
    Route::get('/show_users','AdminController@showUsers')->name('admin.showUsers');
    Route::post('/edit_roles/{user}','AdminController@editRoles')->name('admin.editRoles');
    Route::get('/set_admins/{user}','AdminController@setAdmin')->name('admin.setAdmin');
    Route::get('/set_users/{user}','AdminController@setUser')->name('admin.setUser');

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index','HomeController@home');

//Route::get('/movies','MovieController@index');
//Route::group([ 'middleware'=>'web'],function (){
//Route::get('likes/{movie}','MovieController@likes');
Route::get('likes/{movie}','LikesController@addLike');
Route::get('dislikes/{movie}','LikesController@rmvLike');
//Route::PATCH('/movies/update/{movie}','MovieController@update');
Route::resource('/movies','MovieController');
//});
// ------Navbar Route ----------------------------------------

Route::get('/about',function (){
    return view('about');
});
Route::get('/contact',function (){
    return view('contact');
});
Route::get('/profile' , function (){
    return view('profile');
});

Route::get('/contact' , function (){
    return view('contact');
});

// ------Navbar Route ----------------------------------------




Route::get('/coming_soon',function (){
    return view('comming_soon');
});
Route::resource('/comment','CommentController');



Route::post('/changeAvatar', 'UserController@changeAvatar');


Route::get('test' , function (){
    return view('test');
});


