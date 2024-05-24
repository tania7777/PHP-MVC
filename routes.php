<?php

//On inclut la classe Route
require_once 'app/Route.php';

//On doit inclure tous les Controllers dont on veut disposer
require_once 'app/Controllers/Home.php';
require_once 'app/Controllers/Articles.php';
require_once 'app/Controllers/Newsletter.php';

Route::get([
  '' => ['Home','index'],

  'articles' => ['Articles','index'],
  'articles/add' => ['Articles','add'],
  'articles/delete/{id}' => ['Articles','delete'],
  'articles/edit/{id}' => ['Articles','edit'],

  'newsletter' => ['Newsletter','index'],
  'newsletter/add' => ['Newsletter','add'],
  'newsletter/delete/{id}' => ['Newsletter','delete'],
  'newsletter/edit/{id}' => ['Newsletter','edit'],
]);