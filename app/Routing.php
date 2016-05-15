<?php

namespace App;
use \App\Portfolio;

class Routing
{
    public static function createSlug($string,$id = NULL)
    {
    	$string = mb_substr($string, 0,30);
		$slug = preg_replace('/[^A-Za-z0-9-ก-๙]+/u', '-', $string);
		$check = true;
		$i = 2;
		$tmp_slug = $slug;
		while ($check) {
			if($id) {
				$temp = Portfolio::where('slug','=',$tmp_slug)->where('id','<>',$id)->count();				
			}else{
				$temp = Portfolio::where('slug','=',$tmp_slug)->count();
			}
			if($temp>0) {
				$tmp_slug = $slug.'-'.$i++;
			}else {
				$check = false;
			}
		}	
		$slug = $tmp_slug;			
		return strtolower($slug);
    }
}
