<?php

namespace App\Controllers;

class Article extends \App\Controller
{
  protected $repository = '\App\Repositories\ArticleSQL';
  protected $model_name_single = 'article';
  protected $folder_name = 'articles';
}