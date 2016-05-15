<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $data    = [];
    protected $setting = [];

    public function __construct()
    {       
        
    }

    public function rule($id = false)
    {
        if($id){
            $rule['slug'] = 'required|unique:routings,slug,'.$id;
        }else{
            $rule['slug'] = 'required|unique:routings';
        }
        return $rule;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        view('backend.form.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post          = new Post;
        $post->cover   = $request['cover'];
        $post->title   = $request['title'];
        $post->content = $request['content'];
        $post->status  = 1;
        $post->user_id = 1;
        
        $obj->terms()->detach();     
        $arry_tags = $this->prepareTag($input['tags']);
        $obj->terms()->attach($arry_tags);
        $post->save();        
        // return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('user_id',1)->where('id',$id);
        view('backend.form.post');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function prepareTag($tags)
    {
        $tags    = explode(',',$tags);
        $old_tag = Term::where('taxonomy','=','tag')->get();
        $tmp_old_tag = [];
        foreach ($old_tag as $item)
        {
            $tmp_old_tag[$item->id] = $item->name;
        }
        $tmp_term_search = [];
        foreach ($tags as $item){
            if($item!='')
            {
                $term_search = array_search($item, $tmp_old_tag);
                if($term_search==null)
                {               
                    $term           = new Term();
                    $term->name     = $item;
                    $term->taxonomy = 'tag';
                    $term->save();
                    $term_search    = $term->id;
                }           
                $tmp_term_search[] = $term_search;
            }
        }       
        return $tmp_term_search;
    }
}
