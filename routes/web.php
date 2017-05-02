<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');

// Route::get('/posts/{post}', 'PostsController@show');

// GET /posts
// GET /posts/create
// POST /posts
// GET /posts/{id}/edit 
// PATCH /posts/{id}
// GET /posts/{id}
// DELETE /posts/{id}