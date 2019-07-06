<?php
use App\Message;
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
/**
 * HOME PAGE : LIST ALL MESSAGES
 */
Route::get('/', function () {
    $messages = Message::latest()->get();
    return view('home', ['messages' => $messages]);
});

/**
 * SAVE MESSAGE
 */
Route::post('/', function() {
  $messages = new Message;
  $messages->author_name = request('author_name' , 'Inconnu');
  $messages->content = request('content' , '--');
  $messages->save();

  return redirect('/');
});
