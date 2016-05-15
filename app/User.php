<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'email',
        'username', /* i added this */
        'password',
        'last_name',
        'first_name',
        'permissions',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function existing($condition)
    {        
        $user = User::where($condition['col'],'=',$condition['data'])->get();
        return $user;
    }

    public function portfolios()
    {
        return $this->hasMany('App\Portfolio');
    } 

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }    
}
