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

Route::get('/', function () {
    return view('welcome');
});

Route::get('quiz/{area_id}','QuestionsController@quiz');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::patch('edit/update/{id}', 'QuestionsController@update');

// 一覧
Route::get('post', 'QuestionsController@index')->name('post.index');
// 保存
Route::post('post', 'QuestionsController@store')->name('post.store');
// 作成
Route::get('post/create', 'QuestionsController@create')->name('post.create');
// 表示
Route::get('post/{post_id}', 'QuestionsController@show')->name('post.show');
// 編集
Route::get('post/edit/{post_id}', 'QuestionsController@edit')->name('post.edit');
// 更新
Route::put('post/{post_id}', 'QuestionsController@update')->name('post.update');
// 削除
Route::delete('post/{post_id}', 'QuestionsController@destroy')->name('post.destroy');

// name()することでviewで簡単に呼び出せる

// 選択肢ルーティング
// 問題一覧
Route::get('post/choice/answer/{index_id}', 'QuestionsController@choice')->name('choice.index');
// 保存
Route::post('post/choice/answer', 'QuestionsController@choicestore')->name('choice.store');
// 作成
Route::get('post/choice/create/{post_id}', 'QuestionsController@choicecreate')->name('choice.create');
// 表示
Route::get('post/choice/show/{post_id}', 'QuestionsController@choiceshow')->name('choice.show');
// 編集
Route::get('post/choice/edit/{post_id}', 'QuestionsController@choiceedit')->name('choice.edit');
// 更新
Route::put('post/choice/{post_id}', 'QuestionsController@choiceupdate')->name('choice.update');
// 削除
Route::delete('post/choice/delete/{post_id}', 'QuestionsController@choicedestroy')->name('choice.destroy');
// 新しい追加画面へ
Route::get('post/add/{post_id}', 'QuestionsController@addshow')->name('choiceadd.show');
// 新しい選択肢追加
Route::get('post/choice/add/{post_id}', 'QuestionsController@addshow')->name('newchoice.add');
// 新しい選択肢追加
Route::post('post/newchoice/add', 'QuestionsController@newchoicestore')->name('newchoice.store');