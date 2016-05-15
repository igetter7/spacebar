<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AjaxResponse;

class FavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = substr($name, 1);
        $user = \App\User::where('name',$name)->first();
        // list of followed
        dd($user->followings);   
    }

    public function store(Request $request)
    {
        $portfolio_id = 1;
        $user_id = 2;
        $obj = new Favorite;
        $obj->portfolio_id = $portfolio_id;
        $obj->user_id = $user_id;
        if($obj->save()){
            $return = new AjaxResponse(200,'save successfully');
        }else{
            $return = new AjaxResponse(503,'unable to save');
        } 
        return $return->getJson();
    }

    public function destroy()
    {               
        $portfolio_id = 1;
        $user_id = 2;
        $obj = Favorite::where('user_id','=',$user_id)->where('portfolio_id','=',$portfolio_id);        
        if($obj->delete()){
            $return = new AjaxResponse(200,'delete successfully');
        }else{
            $return = new AjaxResponse(503,'unable to delete');
        }   
        return $return->getJson();    
    }
}
