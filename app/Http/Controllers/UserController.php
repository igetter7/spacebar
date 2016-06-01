<?php

namespace App\Http\Controllers;

use Socialite;
use Sentinel;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use \App\User;



class UserController extends Controller
{	

	public function redirectToProvider()
	{
		return Socialite::driver('facebook')->redirect();
	}

	public function handleProviderCallback()
	{
		$fb_user = Socialite::driver('facebook')->user();
		$condition['col'] = 'facebook_id';
		$condition['data'] = $fb_user->id;
		$user = User::existing($condition);
		if($user->count() == 0)
		{						
			$data['user'] = $fb_user;
			// view crate user
			return view('templates.main.register',$data);
		}else{		
			$user = Sentinel::findById($user->id);	
			$this->signature($user);
		}	
	}

	public function store(Request $request)
	{			
		$validate = Validator::make($request->input(), $this->rule());
		if ($validate->fails())
	    {
	    	$messages = $validate->messages();
	        return redirect()->back()->withErrors($validate->errors())->withInput();
	    }			
		$data['email']      = $request['email'];	
		$data['password']   = $request['password'];	
		$data['first_name'] = $request['first_name'];
		$data['last_name']  = $request['last_name'];		
		$data['job']        = $request['job'];		
		$data['about']      = $request['about'];				
		$user               = Sentinel::registerAndActivate($data);
		$this->signature($user);
		return redirect(url(''));
	}

	public function about($name = NULL)
	{
		$data = array();
		return view('templates.portfolio.index',$data);
	}

	public function contact($name = NULL)
	{
		$data = array();
		return view('templates.portfolio.contact',$data);
	}

	public function edit(Request $request, $id = NULL)
	{

	}

	public function update(Request $request, $id = NULL)
	{
		
	}

	private function rule($id = NULL)
	{
		if($id){
			$rule['email'] = 'required|unique:users,email,'.$id;
		}else{
			$rule['email'] = 'required|unique:users';
		}
		return $rule;
	}

	private function signature($user = NULL)
	{		
		Sentinel::logout();
		$user = Sentinel::loginAndRemember($user);					
	}

	public function getFollowing()
	{
		$user_id = 1;
		$follows = Follow::where('user_id','=',$user_id)->get();
		dd($follows);
	}

	public function getFollowed()
	{
		$user_id = 1;
		$follows = Follow::where('following_user_id','=',$user_id)->get();
		dd($follows);
	}

	public function getFav()
	{
		$user_id = 1;
		$favs = Favorite::where('user_id','=',$user_id)->get();
		dd($favs);
	}
}
