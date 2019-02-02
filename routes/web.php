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

Route::get('posts', function () {
    return 'Test message';
});

Route::get('posts/{postId?}', function($postId = 1) {
    return 'Post id: ' . $postId;
})->name('posts');

Route::get('test', 'TestCOntroller@test')->name('test');

Route::get('posts/{postId}/comments/{commentId}', function($postId, $commnentId){
    return 'Post Id : ' . $postId . ', commentId : ' . $commnentId;
});

