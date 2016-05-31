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

    public function ports()
    {
    	$data['ports'] = Portfolio::paginate(1);        
        return view('site.port',$data);
    }

    public function logout()
	{
		Sentinel::logout();
	}

	public function get($name = NULL)
	{
		echo 'show page info of '.$name;
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
