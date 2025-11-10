<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //테스트 주석 1
    //테스트 주석 2
    //테스트 주석 3
    use AuthorizesRequests, ValidatesRequests;
}
