<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;

use Laravel\Lumen\Routing\Controller as BaseController;

class ContasController extends BaseController
{
    public function index(){
        return  new RedirectResponse("http://lsstar.com.br/sistema/public"); 
    }
}
