<?php
Use Illuminate\Support\Facades\Input as input;
Use App\User;


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
Route::get('/search/',['uses' => 'BlogController@search','as' => 'search']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/quile', function () {
    return view('quile.quile');
});

Route::get('/add/blog', function () {
    return view('addblog');
});

Route::get('/policy', function () {
    return view('/policy');
});
Route::get('question/submit', function () {
    return view('/questionofday');
});
Route::get('/playgame', function () {
    return view('/playgame');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/changepassword', function () {
    return view('changepassword');
});
Route::post('/change/password', function () {
  $User =User::find(Auth::user()->id);
  if(Hash::check(Input::get('passwordold'),$User['password'])&& Input::get('password')==Input::get('password_confirmation')){
    $User->password=bcrypt(Input::get('password'));
    $User->save();
    return redirect('/changepassword')->with('sucess','Password Changed');

  }

});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/notice', function () {
    return view('notice');
});
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');
Route::post('newsletter', 'NewslettersController@store');
Route::post('/home/submit', 'PostsController@submit');
Route::post('/contact/submit', 'MessagesController@submit');
Route::post('/notice/submit', 'NoticesController@submit');
Route::get('/message', 'MessagesController@getMessages');
Route::get('/', 'NoticesController@getMessages');
Route::get('/delete/{id}', 'MessagesController@delMessages');
Route::post('/edit/{id}', 'UserController@updateProfile');
Route::post('/addpost', 'BlogController@addblog');
Route::post('/question/submit', 'QuestionController@addquestion');
Route::post('/answer/submit', 'QuestionController@checkanswer');
Route::get('/question/submit', 'QuestionController@getQuestion');
Route::get('/delete/{id}', 'QuestionController@delQuestions');
Route::get('/del/{blog_id}', 'BlogController@delBlog');
Route::get('/delet/{post_id}', 'PostsController@delPost');
Route::get('/blog', 'BlogController@getBlogs');
Route::get('/forum/{blog_id}', 'BlogController@getBlog');

Auth::routes();

Route::get('/home', 'HomeController@getPosts')->name('home');


