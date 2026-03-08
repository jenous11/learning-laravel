<?php

use Illuminate\Support\Facades\Route;

// Route::get('/',function(){
//   $person=[
//     "name"=>"Jenous",
//     "email"=>"jenousdongol11@gmail.com"
//   ];
//   dump($person);
//   // dd($person);
//   return view('welcome');
// });

Route::view('/about','about');

//routes with parameters
Route::get('/product/{id}',function(string $id){
  return "Product ID=$id";
});
//Route method that matches both get and post
// Route::match(['get', 'post'], '/example', [ExampleController::class, 'handle']);



// Route::get(
//   "{lang}/product/{id}/review/{reviewId}",
//   function (string $lang, string $id, string $reviewId) {

// });

//optional parameter
// Route::get('/product/{category?}',function(string $category=null){
// return "PRODUCT for category={$category}";
// });

//Route parameter validation for only accepting numbers chaining with a method which accepts a parameter
// Route::get("/product/{id}",  function ( string $id) {
// return "parameter validation with id! $id";
// })->whereNumber('id');

//Route parameter validation for only accepting numbers chaining with a method which accepts a parameter
Route::get("/user/{username}",  function ( string $username) {
return "parameter validation with alpha! :  $username";
})->whereAlpha('username');

//alphanumeric characters
Route::get("/password/{password}",  function ( string $password) {
return "parameter validation with alphanumberic! :  $password";
})->whereAlphaNumeric('password');
