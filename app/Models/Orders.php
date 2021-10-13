<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public $table = 'orders';

    protected $fillable = [
        'id',
        'orderid',
        'userid',
        'username',
        'paymentid',
        'shippingdate',
        'orderdate',
        'orderstatus'
    ];
 


    public function OrderDetails (){
        return $this->hasMany('App\Models\OrderDetails');
    }


    public function User (){
        return $this->hasOne('App\Models\Users');
    }
}
