<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/test', function () {
//    return view('test',[
//        "name"=>'Ioan',
//        "phrase"=>"Hype",
//        "tasks"=>["Learning English","have lunch","Do homework",""]
//    ]);
//    return view('test')
//        ->with("autor","Уинстон Черчиль")
//        ->with("phrase","Успех- это движеие от неудаче к неудаче без потери интузиазма")
//        ->with("tasks",["task1","task2","task3"]);
    $author = "Уинстон Черчиль";
    $phrase = "Успех- это движеие от неудаче к неудаче без потери интузиазма";
    $tasks = ["task1", "task2", "task3"];
    return view('test', compact("author", "phrase", "tasks"));
});

Route::get('/hello/{name?}', [UserController::class, 'index']);
//Route::get('/posts/{titel?}', [PostController::class, 'index']);
Route::resource('posts', PostController::class);

