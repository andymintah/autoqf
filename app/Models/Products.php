<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public $table = 'products';

    protected $fillable = [
        'id',
        'productid',
        'productname',
        'productdesc',
        'productcost',
        'productflag'
    ];
    public function user(){
        return $this->belongsTo('App\Models\User'::class);
    }  


    public function bookings (){
        return $this->hasMany('App\Models\Bookings');
    }
}
