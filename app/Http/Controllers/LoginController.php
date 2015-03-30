<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Response;
use View;

class LoginController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function login()
	{
		//echo $request;
		$email = Input::get('email');
		$password = Input::get('password');
		
		//$query = \DB::table('admin')->insert(['username' => 'john@example.com', 'password' => md5('1234')]);
		$query = \DB::table('admin')->where('username','=',$email)->where('password','=',$password);

		$count = count($query);
		//echo $query;
		if($count >0)
		{
			return view('hello');
		}
		else
		{
			return view('login');
		}
	}

}
