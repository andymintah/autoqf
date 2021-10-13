<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetails extends Model
{
    use HasFactory;

    public $table = 'booking_detail';

    protected $fillable = [
        'id',
        'bookingid',
        'serviceid',
        'servicename',
        'bookingcost',
        'servicecost',
        'paymenttype',
        'serviceflag',
        'userid',
        'username',
        'usercontact'
    ];
 


    public function Services (){
        return $this->hasMany('App\Models\Services');
    }
    public function User (){
        return $this->hasOne('App\Models\User');
    }
}
