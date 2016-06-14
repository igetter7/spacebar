<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Sentinel;
use App\Portfolio;
use App\User;

class SiteController extends Controller
{

    public function landing()
    {
    	// load landing page
        $data['users'] = User::where('is_show_index','=',1)->get();        
    	return view('templates.main.index',$data);
    }

    public function register()
    {
        return view('templates.main.register');
    }

    public function about()
    {
        $data['users'] = '';
        return view('templates.main.about',$data);
    }

    public function members()
    {
        $data['users'] = '';
        return view('templates.main.members',$data);
    }

    public function blogs()
    {
        $data['users'] = '';
        return view('templates.main.blogs',$data);
    }

    public function works()
    {
        $data['users'] = '';
        return view('templates.main.works',$data);
    }

    public function ports()
    {
    	$data['ports'] = Portfolio::paginate(1);        
        // return view('templates.main.portfolios',$data);
    }

    public function logout()
	{
		Sentinel::logout();
	}

	public function get($name = NULL)
	{

        return view('templates.portfolio.index',$data);		
	}

    public function subscription(Request $req)
    {        
        $obj = new \App\Subscription();
        $obj->email = $req['email'];
        $obj->save();
        $return = new \App\AjaxResponse(200,'add successfully');
        return $return->getJson();
    }
}
