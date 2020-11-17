<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Validator;

class HomeController extends Controller
{
    public function index(){
    	$data['users'] = User::all();
    	return view('index', $data);
    }

    public function saveIndex(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $rules =  ['email'  => 'required|email' ,'nama' => 'required', 'nohp'  => 'required|numeric' ,'alamat' => 'required'];
        $atributname = [
          'email.required' => 'Field is required.'
        ];

        $validator = Validator::make($data, $rules, $atributname);
        if($validator->fails()){
            return redirect()->back()
            ->withInput()
            ->withErrors( $validator );
        }
        else{
			$p        =  new User;

			$p->email                 = $request->email;
			$p->nama                 = $request->nama;
			$p->nohp                 = $request->nohp;
			$p->alamat                 = $request->alamat;

			$p->save();

			Session::flash('success-message', "Success");
			return redirect()->route('/');            
        }

    }
}
