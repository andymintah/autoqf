<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;


    public $table = 'payments';

    protected $fillable = [
        'id',
        'userid',
        'username',
        'paymentid',
        'relatedservice',
        'relatedproduct'
    ];
    public function user(){
        return $this->belongsTo('App\Models\User'::class);
    }  


    public function bookings (){
        return $this->hasOne('App\Models\Bookings');
    }
    public function orders (){
        return $this->hasOne('App\Models\Orders');
    }
}
