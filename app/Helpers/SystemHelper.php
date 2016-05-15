<?php namespace App\Helpers;
use Illuminate\Support\Facades\Facade;
use \App\Helpers\SystemHelper;

class SystemHelper extends Facade{
	
	protected static function getFacadeAccessor() { return 'SystemHelper'; }

}
?>