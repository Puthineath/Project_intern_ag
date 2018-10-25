<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Inventory extends Model
{
    //
    protected $table = 'inventories';
    protected $fillable = ['product_name','unit_price','amount','total','created_date','expired_date','description','product_image'];
}
