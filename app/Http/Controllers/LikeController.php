<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $name        = substr($name, 1);
        $user = \App\User::where('name',$name)->first();
        // list of followed
        // $user->likes        
    }

    public function store(Request $request)
    {
        $user_id = 1;
        $like_port_id = 2;
        $obj = new Like;
        $obj->user_id = $user_id;
        $obj->like_port_id = $like_port_id;
        if($obj->save()){
            $return = new AjaxResponse(200,'save successfully');
        }else{
            $return = new AjaxResponse(503,'unable to save');
        }
        return $return->getJson();
    }

    public function destroy()
    {        
        $user_id = 1;
        $like_port_id = 2;
        $obj = Like::where('user_id','=',$user_id)->where('like_port_id','=',$like_port_id)->delete();
        $obj->user_id = $user_id;
        $obj->like_port_id = $like_port_id;
        if($obj->delete()){
            $return = new AjaxResponse(200,'delete successfully');
        }else{
            $return = new AjaxResponse(503,'unable to delete');
        }
        return $return->getJson();    
    }
}
