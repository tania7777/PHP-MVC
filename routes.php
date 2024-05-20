<?php

\App\Route::get([
  '' => ['\App\Controllers\Home','index'],

  'articles' => ['\App\Controllers\Article','index'],
  'articles/add' => ['\App\Controllers\Article','add'],
  'articles/delete/{id}' => ['\App\Controllers\Article','delete'],
  'articles/edit/{id}' => ['\App\Controllers\Article','edit'],

  'newsletter' => ['\App\Controllers\Newsletter','index'],
  'newsletter/add' => ['\App\Controllers\Newsletter','add'],
  'newsletter/delete/{id}' => ['\App\Controllers\Newsletter','delete'],
  'newsletter/edit/{id}' => ['\App\Controllers\Newsletter','edit'],
]);