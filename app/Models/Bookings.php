<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    public $table = 'bookings';

    protected $fillable = [
        'id',
        'bookingid',
        'bookingdetailid',
        'servicedeliverydate',
        'servicerequestdate',
        'paymentref',
        'bookingflag',
        'userid',
        'username'
    ];
 


    public function Services (){
        return $this->hasOne('App\Models\Services');
    }
}
