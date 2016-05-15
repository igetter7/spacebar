<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Sentinel;
use App\Portfolio;

class SiteController extends Controller
{

    public function landing()
    {
    	// load landing page
    	return view('site.index');
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
}
