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
    $data = [
        [
            'category' => 'World',
            'post_title' => 'Post1',
            'post_date' => 'Nov 10',
            'post_content' => 'This is a wider card with supporting text below as a natural lead-in to additional content.'
        ],
        [
            'category' => 'World',
            'post_title' => 'Post2',
            'post_date' => 'Nov 10',
            'post_content' => 'This is a wider card with supporting text below as a natural lead-in to additional content.'
        ],
        [
            'category' => 'World',
            'post_title' => 'Post3',
            'post_date' => 'Nov 10',
            'post_content' => 'This is a wider card with supporting text below as a natural lead-in to additional content.'
        ],
        [
            'category' => 'Design',
            'post_title' => 'Post4',
            'post_date' => 'Jan 9',
            'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores iusto quaerat quod saepe sed? Distinctio.'
        ]
    ];
    return view('index')->with('data', $data);
});
Route::get('/posts', function () {
    return view('posts');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::match(['get', 'post'], '/contact', ['as' => 'contact', 'uses' => 'ContactController@index']);
