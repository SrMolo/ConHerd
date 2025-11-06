php<?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
      return view('index');
    });

    Route::get('/campeones', function () {
      return view('campeones');
    });

    Route::get('/musica', function () {
      return view('musica');
    });
