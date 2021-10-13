<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    public $table = 'user_profile';

    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'othername',
        'phoneno',
        'address',
        'location'
    ];
 


    public function User (){
        return $this->hasOne('App\Models\User');
    }
}
