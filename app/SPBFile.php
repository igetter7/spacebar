<?php namespace App;

use Image;
use Illuminate\Support\Facades\Input as Input;

class SPBFile{
	
	public $spb;

	public static function uploadFile($input_name = NULL,$resize = NULL, $path = NULL, $resize_path = NULL, $resize_set_width = NULL)
	{
		if($path == NULL){
			$path = env('UPLOAD_PATH');
		}
		if($resize_path == NULL){
			$resize_path = env('RESIZE_PATH');
		}
		if($resize_set_width == NULL){
			$resize_set_width = env('RESIZE_WIDTH');
		}
		$spb   = new SPBFile();
		$spb->spb = $spb;
		$input = Input::file($input_name);
		$files = [];
		if(!is_array($input)) {
			$files[0] = $input;
		}else{
			$files = $input;
		}
		$ret_files = [];
		foreach ($files as $file) {
			if(isset($file)) {
				$extenstion = strtolower($file->getClientOriginalExtension());
				$path       = $spb->uploadDir($path);
				$file_name  = $file->getClientOriginalName();
				$file_name  = str_replace(' ', '_', $file_name);
				$file_name  = explode('.', $file_name);
				unset($file_name[sizeof($file_name)-1]);
				$file_name  = implode('.', $file_name);
				// echo $path.$file_name.'.'.$extenstion;
				$file_name       = strtolower($file_name);
				while (file_exists($path.$file_name.'.'.$extenstion)) {
				 	$file_name       = $file_name.'_'.strtolower(str_random(4));
				}								
				$uploadSuccess   = $file->move($path,$file_name.'.'.$extenstion);				
				// resize image
				if($resize != NULL)
				{
					$image_info = getimagesize($path.$file_name.'.'.$extenstion);				
					$img = Image::make($path.$file_name.'.'.$extenstion);	
					if($image_info[0] < $resize_set_width) {
						$resize_set_width = $image_info[0];
					}
					$img->resize($resize_set_width, null, function ($constraint) {
					    $constraint->aspectRatio();
					});
					$path = $spb->uploadDir(env('RESIZE_PATH'));
					$img->save($path.$file_name.'.'.$extenstion);	
				}						
				$ret_files[] = ['path'=>$path.$file_name.'.'.$extenstion,'alt'=>'','link'=>'','caption'=>'','type'=>''];
			}
		}
		$return = '';		
		$return = json_encode($ret_files);
		return $return;
	}

	private function uploadDir($path = NULL)
	{
		return $this->spb->getUploadPath($path);
	}

	private function getUploadPath($path = NULL)
	{
		$target_folder = $path;	
		if(substr($target_folder, -1) != '/')
			$target_folder .= '/';		
		//Check Year folder		
		$target_folder .= date('Y-m/');
		if(!file_exists($target_folder)) {
			if(!is_dir($target_folder)) {
				mkdir($target_folder);
			}
		}
		return $target_folder;
	}
		

	public static function deleteFile($file_path)
	{
		$check = @unlink($file_path);		
		return $check;
	}
}
?>