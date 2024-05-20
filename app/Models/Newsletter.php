<?php
namespace App\Models;

class Newsletter extends \App\Model
{
  protected $tablename = 'newsletter';
  protected $pk_name = 'newsletter_id';
  protected $fields = ['newsletter_email'];
}