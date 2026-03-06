<?php

use Illuminate\Support\Facades\Route;
Route::get('/',function(){
  $person = [
    "name"=>"jenous",
    "email"=>"jenous@email.com",
  ];
// dump($person);
dd($person);
return view('welcome');
});
// Route::get('/',function(){
//   return view('welcome');
// });
// Route::get('/about',function(){
//   return view('about');
// });
Route::view('/about','about');
Route::view('/contact','contact',['phone'=>'+9779818084977']);
// Route::get('/product/{id}',function(string $id){
// return "product id=$id";
// });

// Route::get("{lang}/product/{id}/reivew/{reviewId}",function(string $lang,string $id,string $reviewId){

//   //
// });

//optional stuffy
// Route::get('/product/{category?}',function(string $category=null ){
// return "Product for category=$category";
// });

//explicitly stating datatype
Route::get('/product/{id}',function(string $id){
return "Works! $id";
})->whereNumber('id'); // only digits

// Route::get('/user/{username}',function(string $username){
// return "<h1>this is alphanumeric: $username </h1>";
// })->whereAlphaNumeric('username','[a-z]+');

// Route::get("{lang}/products",function(string $lang){
// return "we are talking: $lang";
// })->whereIn("lang", ["en", "ka", "in"]);

// Route::get('/user/{username}',function(string $username){
// })->where('username','[a-z]+');

// Route::get("{lang}/products/{id}",function(string $lang, string $id){
// })->where(['lang'=>'[a-z]{2}','id'=>'\d{4,}']);

Route::get("/search/{search}",function(string $search){
return $search;
})->where('search','.+');
