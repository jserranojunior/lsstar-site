<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;

use Laravel\Lumen\Routing\Controller as BaseController;

class ContasController extends BaseController
{
    public function index(){
        return  new RedirectResponse("http://191.209.114.192:1016/lsstar/public/login"); 
    }
}
