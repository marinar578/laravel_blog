<?php

namespace App\Billing;

class Stripe
{
  protected $key;
  
  public function __construct($api_key)
  {
    $this->key = $api_key;
  }
}