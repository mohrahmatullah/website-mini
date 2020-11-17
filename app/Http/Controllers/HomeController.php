<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
    	$data['users'] = User::all();
    	return view('index', $data);
    }
}
