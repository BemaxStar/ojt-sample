<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
	public function index(){
		$results = DB::table('info')->get();
		// view accepts 2 parameters 
		// parameter 1 blade file
		// parameter 2 is associative array -> array key must be called in blade file
		return view('regForm',['infos' => $results]);
	}

	public function store(Request $request){
		$inputs = $request->only(['name','user','hashed_password','address','e_mail']);

		$result = DB::table('info')->insert($inputs);
		if($result) {
			return redirect('/');
		}
	}

	// $user_id references to routes.php
	public function show(Request $request,$user_id){
		//purpose get user to be editedss
		$user_info = DB::table('info')->whereId($user_id)->first();

		$results = DB::table('info')->get();

		$view_data = [
			'infos'     => $results, 
			'user_info' => $user_info
		];

		// view accepts 2 parameters 
		// parameter 1 blade file
		// parameter 2 is associative array -> array key must be called in blade file
		return view('regForm',$view_data);
	}

	public function update(Request $request,$user_id){
		$inputs = $request->only(['name','user','hashed_password','address','e_mail']);

		$result = DB::table('info')->whereId($user_id)->update($inputs);
		if($result) {
			return redirect('/');
		}
	}

	public function destroy(Request $request,$user_id){
		$result = DB::table('info')->whereId($user_id)->delete();
		if($result) {
			return redirect('/');
		}
	}
}