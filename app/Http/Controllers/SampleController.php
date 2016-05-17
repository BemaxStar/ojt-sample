<?php

namespace App\Http\Controllers;

use DB;

class SampleController extends Controller
{
//	public function helloWorldDisplay(){
//		echo "Hello World";
//	}
	

	public function assignment(){
		$arr = ['num1' => 5, 'num2' =>7];
		 return view('trial', $arr);
	}

	public function selectQuery(){
		$using_select_get = DB::table('info')->select('name','user','hashed_password','address','e_mail')->get();

		echo "<pre>";
			print_r($using_select_get);
		echo "</pre>";

//		$using_get = DB::table('info')->get();

//		echo "<pre>";
//			print_r($using_get);
//		echo "</pre>";

//		$using_where_id = DB::table('info')->whereId(6)->get();

//		echo "<pre>";
//			print_r($using_where_id);
//		echo "</pre>";

//		$using_where_id2 = DB::table('info')->where('id','=',6)->get();

//		echo "<pre>";
//			print_r($using_where_id2);
//		echo "</pre>";

//		$using_where_first = DB::table('info')->where('id','=',6)->first();

//		echo "<pre>";
//			print_r($using_where_first);
//		echo "</pre>";
	}

	public function insertQuery(){
		$data = [
			'name' => 'GwapoKo',
			'user' => 'Weee?',
			'hashed_password' => 'asdsadas',
			'address' => 'Address',
			'e_mail' => 'email@email.com'
		];
		// Using Insert
		// $result = DB::table('info')->insert($data);

		// Using Insert but return id of all data
		if( $result = DB::table('info')->insertGetId($data) ){
			// return $result.':'.'Saved';sss
			return redirect('select2');
		}
		return 'Not Saved';
	}

	public function updateQuery(){
		$data = [
			'name' => 'Sample Update',
			'user' => 'sample',
			'hashed_password' => 'asdsadas',
			'address' => 'Address',
			'e_mail' => 'email@email.com'
		];
		$result =DB::table('info')->where('id', 14)->update($data);
		if( $result ){
			return 'Updated';
		}
		return 'Not Updated';
	}

	public function deleteQuery(){
		$result =DB::table('info')->where('id', 14)->delete();
		if( $result ){
			return 'Deleted';
		}
		return 'Not Deleted';
	}

	public function selectQuery2(){
		$results = DB::table('info')->get();
		// view accepts 2 parameters 
		// parameter 1 blade file
		// parameter 2 is associative array -> array key must be called in blade file
		return view('regForm',['infos' => $results]);
	}
}