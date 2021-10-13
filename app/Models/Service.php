<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $table = 'services';

    protected $fillable = [
        'id',
        'serviceid',
        'servicename',
        'servicedesc',
        'servicecost',
        'serviceflag'
    ];
 


    public function bookings (){
        return $this->hasMany('App\Models\Bookings');
    }
   
}
