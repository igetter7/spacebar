<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Portfolio;
use App\SPBFile;
use App\Routing;
use App\User;

class BlogController extends Controller
{    
    public function index($user)
    {
        $data = array();
        return view('templates.portfolio.blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load view
    }

    public function upload()
    {
        dd($this->settingImages('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        // check         
        $obj          = new Portfolio();        
        $obj->title   = $request['title'];
        $obj->slug    = Routing::createSlug($obj->title);
        $obj->caption = $request['caption'];
        $obj->color   = $request['color'];
        $obj->images  = $this->settingImages($request['images']);
        $url          = '';
        $this->trun($url);   
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = array();
        return view('templates.portfolio.blog-inside',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($this->checkOwner($id))
        {
            // load view
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($this->checkOwner($id))
        {
            $obj          = Portfolio::find($id);
            $obj->title   = $request['title'];
            $obj->slug    = Routing::createSlug($obj->title,$id);
            $obj->caption = $request['caption'];
            $obj->color   = $request['color'];
            $obj->images  = $this->settingImages($request['images']);
            $obj->save();            
        }
    }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->checkOwner($id))
        {
            $obj          = Portfolio::find($id);            
            $obj->delete(); 
            $url = '';            
        }
    }

    private function settingImages($field_name = NULL)
    {
        // upload images        
        $json_file = SPBFile::uploadFile($field_name,true);        
        return $json_file;
    }

    private function checkOwner($id = NULL)
    {
        if($id)
        {
            $count = Portfolio::where('id','=',$id)->where('user_id','=',$user_id)->count();
            if($count>0)
            {
                return true;
            } else {
                // $url for check owner
                $url = '';
                return redirect('test');
            }
        }                
    }
}
