<?php

namespace App\Http\Controllers\ForntPage;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class HomeController
{
  function __construct()
  {
  }

  public function showHome(Request $request)
  {
    $this->data = array(
      ['a' => 1],
      ['b' => 2],
    );
    return view('Frontpage/home/home');
  }
}
