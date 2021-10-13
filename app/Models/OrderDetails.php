<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    public $table = 'order_details';

    protected $fillable = [
        'id',
        'orderdetailid',
        'servicename',
        'userid',
        'username',
        'ordernumber',
        'productid',
        'productname',
        'amount'
    ];
 


    public function Products (){
        return $this->hasMany('App\Models\Products');
    }

    public function Orders (){
        return $this->hasOne('App\Models\Orders');
    }
    public function User (){
        return $this->hasOne('App\Models\Users');
    }

}
