<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AjaxResponse;

class FollowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $name = substr($name, 1);
        $user = \App\User::where('name',$name)->first();
        // list of followed
        // dd($user->favorites);
    }

    public function store(Request $request)
    {
        $user_id = 1;
        $following_user_id = 2;
        $obj = new Following;
        $obj->user_id = $user_id;
        $obj->following_user_id = $following_user_id;
        if($obj->save()){
            $return = new AjaxResponse(200,'save successfully');
        }else{
            $return = new AjaxResponse(503,'unable to save');
        } 
    }

    public function destroy()
    {        
        $user_id = 1;
        $following_user_id = 2;
        $obj = Following::where('user_id','=',$user_id)->where('following_user_id','=',$following_user_id);
        if($obj->delete()){
            $return = new AjaxResponse(200,'delete successfully');
        }else{
            $return = new AjaxResponse(503,'unable to delete');
        }
    }
}
