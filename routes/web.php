<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
  $person=[
    "name"=>"Jenous",
    "email"=>"jenousdongol11@gmail.com"
  ];
  // dump($person);
  dd($person);
  return view('welcome');
});

