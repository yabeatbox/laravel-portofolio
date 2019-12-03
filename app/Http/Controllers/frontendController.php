<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ManagePortofolios;
use DB;
use Auth;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class frontendController extends Controller
{
    public function myService(){
      $manages = ManagePortofolios::all();
      return view('index')->with(compact('manages'));
    }
}
